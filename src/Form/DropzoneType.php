<?php

namespace Emrdev\SymfonyDropzone\Form;

use Doctrine\ORM\EntityManagerInterface;
use Emrdev\SymfonyDropzone\Transformer\DropzoneTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DropzoneType extends AbstractType
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    final public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add(
            'dropzone',
            CollectionType::class,
            [
                'entry_type' => HiddenType::class,
                'label' => false,
                'allow_add' => true,
                'allow_delete' => true,
                'attr' => [
                    'class' => 'dropzone',
                    'id' => 'dropzone',
                ],
            ]
        )->addModelTransformer(new DropzoneTransformer($this->entityManager, $options));

        parent::buildForm($builder, $options);
    }

    /**
     * @param OptionsResolver $resolver
     */
    final public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'class' => null,
            'maxFiles' => 1,
            'uploadHandler' => null,
            'removeHandler' => null,
        ]);

        parent::configureOptions($resolver);
    }

    /**
     * @param FormView $view
     * @param FormInterface $form
     * @param array $options
     */
    final public function buildView(FormView $view, FormInterface $form, array $options): void
    {
        /** @var FormView $f */

        $f = $view->vars['form'];

        $view->vars['formName'] = $f->parent->vars['name'];
        $view->vars['id'] = $this->dashesToCamelCase($f->vars['id']);
        $view->vars['maxFiles'] = $options['maxFiles'];
        $view->vars['uploadHandler'] = $options['uploadHandler'];
        $view->vars['removeHandler'] = $options['removeHandler'];
        $view->vars['files'] =  $form->getData();

        parent::buildView($view, $form, $options);
    }

    private function dashesToCamelCase($string, $capitalizeFirstCharacter = false)
    {

        $str = str_replace('_', '', ucwords($string, '_'));

        if (!$capitalizeFirstCharacter) {
            $str = lcfirst($str);
        }

        return $str;
    }

}
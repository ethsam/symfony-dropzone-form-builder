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
            'choice_src' => 'src',
            'maxFiles' => 1,
            'uploadHandler' => null,
            'removeHandler' => null,
            'method' => "POST",
            'withCredentials' => 0,
            'thumbnailWidth' => 120,
            'thumbnailHeight' => 120,
            'thumbnailMethod' => "crop",
            'resizeWidth' => null,
            'resizeHeight' => null,
            'resizeMimeType' => null,
            'resizeMethod' => "contain",
            'filesizeBase' => 1024,
            'headers' => null,
            'clickable' => true,
            'ignoreHiddenFiles' => true,
            'acceptedFiles' => null,
            'autoProcessQueue' => true,
            'autoQueue' => true,
            'addRemoveLinks' => true,
            'previewsContainer' => null,
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
        $view->vars['uploadHandler'] = $options['uploadHandler'];
        $view->vars['removeHandler'] = $options['removeHandler'];
        $view->vars['files'] =  $form->getData();

        $view->vars['class'] = $options['class'];
        $view->vars['maxFiles'] = $options['maxFiles'];
        $view->vars['method'] =  "POST";
        $view->vars['choice_src'] =  "src";
        $view->vars['withCredentials'] =  0;
        $view->vars['thumbnailWidth'] =  120;
        $view->vars['thumbnailHeight'] =  120;
        $view->vars['thumbnailMethod'] =  "crop";
        $view->vars['resizeWidth'] =  null;
        $view->vars['resizeHeight'] =  null;
        $view->vars['resizeMimeType'] =  null;
        $view->vars['resizeMethod'] =  "contain";
        $view->vars['filesizeBase'] =  1024;
        $view->vars['headers'] =  null;
        $view->vars['clickable'] =  true;
        $view->vars['ignoreHiddenFiles'] =  true;
        $view->vars['acceptedFiles'] =  null;
        $view->vars['autoProcessQueue'] =  true;
        $view->vars['autoQueue'] =  true;
        $view->vars['addRemoveLinks'] =  true;
        $view->vars['previewsContainer'] =   null;


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
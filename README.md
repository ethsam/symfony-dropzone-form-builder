# Symfony DropzoneType

**Still under development! Don't use!!!**

**Still under development! Don't use!!!**

**Still under development! Don't use!!!**

## Installing

`composer require emrdev/symfony-dropzone`


### Assets
Add the dropzone library to your project in template
```js
        <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
        <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
```

## Usage
```php
public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
{ 

    // userFiles is OneToMany
    $builder->add('userFiles', DropzoneType::class, [
        'class' => File::class,
        'maxFiles' => 6,
        'uploadHandler'=>'/uploadhandler',
        'removeHandler'=> '/removeHandler'
   ]);
}
```

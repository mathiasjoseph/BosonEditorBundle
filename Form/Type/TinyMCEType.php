<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 20/06/17
 * Time: 21:18
 */

namespace Boson\Bundle\EditorBundle\Form\Type;


use Miky\Bundle\CategoryBundle\Provider\CategoryProvider;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TinyMCEType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return "tinymce";
    }


    public function getParent()
    {
        return TextareaType::class;
    }
}
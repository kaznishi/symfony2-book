<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;

class InquiryAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('processStatus', 'choice', [
                'choices' => [
                    '未対応',
                    '対応中',
                    '対応済',
                ],
                'empty_data' => 0,
                'expanded' => true,
            ])
            ->add('staff', 'entity', array(
                'class' => 'AppBundle:Staff',
                'property' => 'name',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                        ->where("s.isInquiryStaff = :isInquiryStaff")->setParameter('isInquiryStaff', 1);
                }
            ))
            ->add('processMemo', 'textarea')
            ->add('submit', 'submit', [
                'label' => '保存',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => ['admin'],
        ));
    }

    public function getName()
    {
        return 'inquiry';
    }
}

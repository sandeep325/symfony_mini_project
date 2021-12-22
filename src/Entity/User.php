<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    // for validation
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('name' , new Assert\NotBlank([
            'message'=>'name must be required.'
        ]));

        // new Assert\Length(['min' => 10,])
            

        $metadata->addPropertyConstraint('email' , new Assert\NotBlank([
            'message'=>'email must be required.'
        ]));

        $metadata->addPropertyConstraint('email' , new Assert\Email([
            // 'message'=>'Enter valid email.'
            'message'=>'The Email "{{ value }}" is not a valid email..'
            
        ]));

        $metadata->addPropertyConstraint('mobile' , new Assert\NotBlank([
            'message'=>'mobile must be required..'
        ]));


        $metadata->addPropertyConstraint('mobile' , new Assert\Length([
            'min' => 10,
            'max' => 10,
            'minMessage' => 'Enter valid number.',
            'maxMessage' => 'Enter valid number.',
        ]));

        $metadata->addPropertyConstraint('city' , new Assert\NotBlank([
            'message'=>'city must be required.'
        ]));

        $metadata->addPropertyConstraint('age' , new Assert\NotBlank([
            'message'=>'age must be required.'
        ]));


    }
    // end for validation


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $age;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

   

    public function setName(string $name=NULL): self
    {
        $this->name = $name;

        return $this;
    }

    //=======================================for validation start================================================

    // public function getrawName(): string
    // {
    //     return (string) $this->name;
    // }

    // public function setrawName(string $name): self
    // {
    //     $this->name = $name;

    //     return $this;
    // }



    // public function getrawEmail(): string
    // {
    //     return (string) $this->email;
    // }

    // public function setrawEmail(string $email): self
    // {
    //     $this->email = $email;

    //     return $this;
    // }


    // public function getrawMobile(): string
    // {
    //     return (string) $this->mobile;
    // }

    // public function setrawMobile(string $mobile): self
    // {
    //     $this->mobile = $mobile;

    //     return $this;
    // }

    // public function getrawCity(): string
    // {
    //     return (string) $this->city;
    // }

    // public function setrawCity(string $city): self
    // {
    //     $this->city = $city;

    //     return $this;
    // }


    // public function getrawAge(): string
    // {
    //     return (string) $this->age;
    // }

    // public function setrawAge(string $age): self
    // {
    //     $this->age = $age;

    //     return $this;
    // }

// =============================for validation end ==============================================

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email=NULL): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile=NULL): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city=NULL): self
    {
        $this->city = $city;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(string $age=NULL): self
    {
        $this->age = $age;

        return $this;
    }
}

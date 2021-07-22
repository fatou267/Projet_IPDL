# Système de gestion de l'EDMI

### `Prerequisites`

   Install [Composer](https://https://getcomposer.org/download/)
   Use `composer update` to install the following dependencies:
   - **Doctrine ORM** for database mapping
  

#### Doctrine

    When create an entity be sure to add all required annotations.
    For example:

        <?php
        namespace App\Entity;

        use Doctrine\ORM\Mapping as ORM;

        /**
        *@ORM\Entity
        *@ORM\Table(name="foo")
        */
        class foo{

            /**
            *@ORM\Column(type="string")
            */
            private attribute1;

            ...

        }
        
   


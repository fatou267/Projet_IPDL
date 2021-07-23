# Système de gestion de l'EDMI

### `Prerequisites`

   Install [Composer](https://getcomposer.org/download/)<br>
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
        class foo
        {
            
            /**
             * @ORM\Id
             * @ORM\Column(type="integer")
             * @ORM\GeneratedValue
             */
            private $id;
            /**
            *@ORM\Column(type="string")
            */
            private attribute1;

            ...

        }

### Architecture

   For this project, we use MVC pattern to strucutre our code.
   So we have the following folders and files: 
   
         - Controller : for all controllers
         - Entity : for all model entities
         - Repository : for model (database requests)
         - index.php : the router

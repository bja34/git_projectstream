<?php

namespace AppBundle\Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * Created by PhpStorm.
 * User: mik
 * Date: 27/07/2016
 * Time: 15:45
 */
/** movie
 * @ORM\Table(name="Movie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MovieRepository")
 */


class Movie
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullabel=FALSE)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */

    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", nullabel=FALSE)
     */

    private $title;


}
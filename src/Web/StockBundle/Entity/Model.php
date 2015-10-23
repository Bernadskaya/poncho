<?php

namespace Web\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Sylius\Component\Product\Model\ProductInterface;

/**
 * Model
 */
class Model
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $titleENG;

    /**
     * @var string
     */
    private $description;

    /**
     *
     * @Gedmo\Slug(fields={"titleENG"})
     */
    private $slugENG;
    /**
     * @var \Web\StockBundle\Entity\Size
     */
    private $size;

/**
*
*/
    private $sizes;
    /**
     *
     * @Gedmo\Slug(fields={"name"})
     */
    private $slug;

    private $relatedModels;

    public function __construct(){
        $this->relatedModels = new \Doctrine\Common\Collections\ArrayCollection();
        $this->relatedModelsWithThis = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sizes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->createdAt = new \DateTime();

    }
    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $relatedModels
     */
    public function setRelatedModels($relatedModels)
    {
        $this->relatedModels = $relatedModels;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getRelatedModels()
    {
        return $this->relatedModels;
    }
    private $relatedModelsWithThis;

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $relatedModelsWithThis
     */
    public function setRelatedModelsWithThis($relatedModelsWithThis)
    {
        $this->relatedModelsWithThis = $relatedModelsWithThis;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getRelatedModelsWithThis()
    {
        return $this->relatedModelsWithThis;
    }



    /**
     * @param mixed $slugENG
     */
    public function setSlugENG($slugENG)
    {
        $this->slugENG = $slugENG;
    }

    /**
     * @return mixed
     */
    public function getSlugENG()
    {
        return $this->slugENG;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug = null)
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @var string
     */
    private $descriptionENG;


    /**
     * @var \Web\StockBundle\Entity\YarnInStock
     */
    private $yarn;

    /**
     * @var \DateTime
     */
    private $productionTime;
    private $costRub;

    /**
     * @param mixed $costRub
     */
    public function setCostRub($costRub)
    {
        $this->costRub = $costRub;
    }

    /**
     * @return mixed
     */
    public function getCostRub()
    {
        return $this->costRub;
    }
    private $costUsd;

    /**
     * @param mixed $costUsd
     */
    public function setCostUsd($costUsd)
    {
        $this->costUsd = $costUsd;
    }

    /**
     * @return mixed
     */
    public function getCostUsd()
    {
        return $this->costUsd;
    }

    /**
     * @var string
     */
    private $gallery;




    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Model
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set titleENG
     *
     * @param string $titleENG
     * @return Model
     */
    public function setTitleENG($titleENG)
    {
        $this->titleENG = $titleENG;

        return $this;
    }

    /**
     * Get titleENG
     *
     * @return string 
     */
    public function getTitleENG()
    {
        return $this->titleENG;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Model
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionENG
     *
     * @param string $descriptionENG
     * @return Model
     */
    public function setDescriptionENG($descriptionENG)
    {
        $this->descriptionENG = $descriptionENG;

        return $this;
    }

    /**
     * Get descriptionENG
     *
     * @return string 
     */
    public function getDescriptionENG()
    {
        return $this->descriptionENG;
    }

    public function addSizes(Size $size)
    {
        $size->addModel($this); // synchronously updating inverse side
        $this->sizes[] = $size;
    }


    public function setSizes ($sizes) {
        $this->sizes = $sizes;
        return $this;
    }

    public function getSizes(){
        return $this->sizes;
    }

    /**
     * Set yarn
     *
     * @param \Web\StockBundle\Entity\YarnInStock $yarn
     * @return Model
     */
    public function setYarn(YarnInStock $yarn)
    {
        $this->yarn = $yarn;

        return $this;
    }

    /**
     * Get yarn
     *
     * @return string 
     */
    public function getYarn()
    {
        return $this->yarn;
    }

    /**
     * Set productionTime
     *
     * @param \DateTime $productionTime
     * @return Model
     */
    public function setProductionTime($productionTime)
    {
        $this->productionTime = $productionTime;

        return $this;
    }

    /**
     * Get productionTime
     *
     * @return \DateTime 
     */
    public function getProductionTime()
    {
        return $this->productionTime;
    }

    /**
     * Set gallery
     *
     * @param string $gallery
     * @return Model
     */
    public function setGallery($gallery)
    {
        $this->gallery = $gallery;

        return $this;
    }

    /**
     * Get gallery
     *
     * @return string 
     */
    public function getGallery()
    {
        return $this->gallery;
    }
    public function __toString()
    {
        return $this->getName() ?: '-';
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

}

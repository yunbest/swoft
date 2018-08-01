<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * @Entity()
 * @Table(name="mallbuilder_nav")
 * @uses      MallbuilderNav
 */
class MallbuilderNav extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="smallint")
     */
    private $id;

    /**
     * @var int $parentId 
     * @Column(name="parent_id", type="smallint", default=0)
     */
    private $parentId;

    /**
     * @var string $name 
     * @Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $url 
     * @Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string $identifier 
     * @Column(name="identifier", type="string", length=255)
     */
    private $identifier;

    /**
     * @var int $type 
     * @Column(name="type", type="tinyint", default=1)
     */
    private $type;

    /**
     * @var int $available 
     * @Column(name="available", type="tinyint", default=1)
     */
    private $available;

    /**
     * @var int $displayorder 
     * @Column(name="displayorder", type="tinyint", default=0)
     */
    private $displayorder;

    /**
     * @var int $navtype 
     * @Column(name="navtype", type="tinyint", default=1)
     */
    private $navtype;

    /**
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setParentId(int $value): self
    {
        $this->parentId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUrl(string $value): self
    {
        $this->url = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIdentifier(string $value): self
    {
        $this->identifier = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setAvailable(int $value): self
    {
        $this->available = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setDisplayorder(int $value): self
    {
        $this->displayorder = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setNavtype(int $value): self
    {
        $this->navtype = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @return int
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * @return mixed
     */
    public function getNavtype()
    {
        return $this->navtype;
    }

}

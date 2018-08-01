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
 * 产品浏览量表

 * @Entity()
 * @Table(name="mallbuilder_product_browse")
 * @uses      MallbuilderProductBrowse
 */
class MallbuilderProductBrowse extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $pid 产品ID
     * @Column(name="pid", type="integer")
     */
    private $pid;

    /**
     * @var string $name 
     * @Column(name="name", type="string", length=110)
     */
    private $name;

    /**
     * @var string $company 
     * @Column(name="company", type="char", length=10)
     */
    private $company;

    /**
     * @var int $click 
     * @Column(name="click", type="integer", default=0)
     */
    private $click;

    /**
     * @var int $time 
     * @Column(name="time", type="integer")
     */
    private $time;

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
     * 产品ID
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

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
    public function setCompany(string $value): self
    {
        $this->company = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setClick(int $value): self
    {
        $this->click = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setTime(int $value): self
    {
        $this->time = $value;

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
     * 产品ID
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
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
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return int
     */
    public function getClick()
    {
        return $this->click;
    }

    /**
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

}

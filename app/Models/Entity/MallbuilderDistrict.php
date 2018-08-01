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
 * 地区表

 * @Entity()
 * @Table(name="mallbuilder_district")
 * @uses      MallbuilderDistrict
 */
class MallbuilderDistrict extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 地区名
     * @Column(name="name", type="string", length=255)
     * @Required()
     */
    private $name;

    /**
     * @var int $pid 父类ID
     * @Column(name="pid", type="integer", default=0)
     */
    private $pid;

    /**
     * @var int $sorting 排序
     * @Column(name="sorting", type="smallint", default=0)
     */
    private $sorting;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 地区名
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 父类ID
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

        return $this;
    }

    /**
     * 排序
     * @param int $value
     * @return $this
     */
    public function setSorting(int $value): self
    {
        $this->sorting = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 地区名
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 父类ID
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * 排序
     * @return int
     */
    public function getSorting()
    {
        return $this->sorting;
    }

}

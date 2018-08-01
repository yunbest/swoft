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
 * 品牌分类表

 * @Entity()
 * @Table(name="mallbuilder_brand_cat")
 * @uses      MallbuilderBrandCat
 */
class MallbuilderBrandCat extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $parentId 父类ID
     * @Column(name="parent_id", type="integer", default=0)
     */
    private $parentId;

    /**
     * @var int $displayorder 排序
     * @Column(name="displayorder", type="smallint", default=255)
     */
    private $displayorder;

    /**
     * @var string $catname 分类名
     * @Column(name="catname", type="string", length=100)
     * @Required()
     */
    private $catname;

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
     * 父类ID
     * @param int $value
     * @return $this
     */
    public function setParentId(int $value): self
    {
        $this->parentId = $value;

        return $this;
    }

    /**
     * 排序
     * @param int $value
     * @return $this
     */
    public function setDisplayorder(int $value): self
    {
        $this->displayorder = $value;

        return $this;
    }

    /**
     * 分类名
     * @param string $value
     * @return $this
     */
    public function setCatname(string $value): self
    {
        $this->catname = $value;

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
     * 父类ID
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * 排序
     * @return mixed
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * 分类名
     * @return string
     */
    public function getCatname()
    {
        return $this->catname;
    }

}

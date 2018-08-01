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
 * 品牌表

 * @Entity()
 * @Table(name="mallbuilder_brand")
 * @uses      MallbuilderBrand
 */
class MallbuilderBrand extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 品牌名
     * @Column(name="name", type="string", length=80)
     * @Required()
     */
    private $name;

    /**
     * @var string $charIndex 首字母
     * @Column(name="char_index", type="char", length=1)
     * @Required()
     */
    private $charIndex;

    /**
     * @var int $catid 分类ID
     * @Column(name="catid", type="integer")
     * @Required()
     */
    private $catid;

    /**
     * @var string $logo LOGO
     * @Column(name="logo", type="string", length=150)
     * @Required()
     */
    private $logo;

    /**
     * @var int $displayorder 排序
     * @Column(name="displayorder", type="smallint", default=0)
     */
    private $displayorder;

    /**
     * @var int $status 状态
     * @Column(name="status", type="tinyint", default=1)
     */
    private $status;

    /**
     * @var int $createTime 创建时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var int $hits 点击数
     * @Column(name="hits", type="integer", default=0)
     */
    private $hits;

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
     * 品牌名
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 首字母
     * @param string $value
     * @return $this
     */
    public function setCharIndex(string $value): self
    {
        $this->charIndex = $value;

        return $this;
    }

    /**
     * 分类ID
     * @param int $value
     * @return $this
     */
    public function setCatid(int $value): self
    {
        $this->catid = $value;

        return $this;
    }

    /**
     * LOGO
     * @param string $value
     * @return $this
     */
    public function setLogo(string $value): self
    {
        $this->logo = $value;

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
     * 状态
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 点击数
     * @param int $value
     * @return $this
     */
    public function setHits(int $value): self
    {
        $this->hits = $value;

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
     * 品牌名
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 首字母
     * @return string
     */
    public function getCharIndex()
    {
        return $this->charIndex;
    }

    /**
     * 分类ID
     * @return int
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * LOGO
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * 排序
     * @return int
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * 状态
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 点击数
     * @return int
     */
    public function getHits()
    {
        return $this->hits;
    }

}

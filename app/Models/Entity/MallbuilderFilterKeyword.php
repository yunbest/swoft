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
 * 过滤关键词表

 * @Entity()
 * @Table(name="mallbuilder_filter_keyword")
 * @uses      MallbuilderFilterKeyword
 */
class MallbuilderFilterKeyword extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $keyword 关键字
     * @Column(name="keyword", type="string", length=50)
     */
    private $keyword;

    /**
     * @var string $replace 替代
     * @Column(name="replace", type="string", length=50)
     */
    private $replace;

    /**
     * @var int $statu 状态
     * @Column(name="statu", type="tinyint", default=1)
     */
    private $statu;

    /**
     * @var int $time 创建时间
     * @Column(name="time", type="integer")
     */
    private $time;

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
     * 关键字
     * @param string $value
     * @return $this
     */
    public function setKeyword(string $value): self
    {
        $this->keyword = $value;

        return $this;
    }

    /**
     * 替代
     * @param string $value
     * @return $this
     */
    public function setReplace(string $value): self
    {
        $this->replace = $value;

        return $this;
    }

    /**
     * 状态
     * @param int $value
     * @return $this
     */
    public function setStatu(int $value): self
    {
        $this->statu = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param int $value
     * @return $this
     */
    public function setTime(int $value): self
    {
        $this->time = $value;

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
     * 关键字
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * 替代
     * @return string
     */
    public function getReplace()
    {
        return $this->replace;
    }

    /**
     * 状态
     * @return mixed
     */
    public function getStatu()
    {
        return $this->statu;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

}

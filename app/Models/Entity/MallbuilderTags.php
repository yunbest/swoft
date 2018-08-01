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
 * 标签表

 * @Entity()
 * @Table(name="mallbuilder_tags")
 * @uses      MallbuilderTags
 */
class MallbuilderTags extends Model
{
    /**
     * @var string $tagname 名称
     * @Id()
     * @Column(name="tagname", type="string", length=100)
     */
    private $tagname;

    /**
     * @var int $closed 关闭
     * @Column(name="closed", type="tinyint", default=0)
     */
    private $closed;

    /**
     * @var int $total 总数
     * @Column(name="total", type="integer")
     * @Required()
     */
    private $total;

    /**
     * @var int $statu 0/1  1表示已导入
     * @Column(name="statu", type="tinyint")
     * @Required()
     */
    private $statu;

    /**
     * 名称
     * @param string $value
     * @return $this
     */
    public function setTagname(string $value)
    {
        $this->tagname = $value;

        return $this;
    }

    /**
     * 关闭
     * @param int $value
     * @return $this
     */
    public function setClosed(int $value): self
    {
        $this->closed = $value;

        return $this;
    }

    /**
     * 总数
     * @param int $value
     * @return $this
     */
    public function setTotal(int $value): self
    {
        $this->total = $value;

        return $this;
    }

    /**
     * 0/1  1表示已导入
     * @param int $value
     * @return $this
     */
    public function setStatu(int $value): self
    {
        $this->statu = $value;

        return $this;
    }

    /**
     * 名称
     * @return mixed
     */
    public function getTagname()
    {
        return $this->tagname;
    }

    /**
     * 关闭
     * @return int
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * 总数
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * 0/1  1表示已导入
     * @return int
     */
    public function getStatu()
    {
        return $this->statu;
    }

}

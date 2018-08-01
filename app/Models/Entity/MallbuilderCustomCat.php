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
 * 会员自定义类别表

 * @Entity()
 * @Table(name="mallbuilder_custom_cat")
 * @uses      MallbuilderCustomCat
 */
class MallbuilderCustomCat extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $pid 父类ID
     * @Column(name="pid", type="integer", default=0)
     */
    private $pid;

    /**
     * @var int $sysCat 类别ID
     * @Column(name="sys_cat", type="integer")
     */
    private $sysCat;

    /**
     * @var int $userid 会员ID
     * @Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var int $type 类型
     * @Column(name="type", type="tinyint")
     */
    private $type;

    /**
     * @var string $name 名称
     * @Column(name="name", type="string", length=60)
     */
    private $name;

    /**
     * @var string $des 描述
     * @Column(name="des", type="char", length=200)
     */
    private $des;

    /**
     * @var int $tj 推荐
     * @Column(name="tj", type="tinyint", default=0)
     */
    private $tj;

    /**
     * @var int $nums 数量
     * @Column(name="nums", type="integer", default=0)
     */
    private $nums;

    /**
     * @var string $pic 图片
     * @Column(name="pic", type="string", length=100)
     */
    private $pic;

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
    public function setPid(int $value): self
    {
        $this->pid = $value;

        return $this;
    }

    /**
     * 类别ID
     * @param int $value
     * @return $this
     */
    public function setSysCat(int $value): self
    {
        $this->sysCat = $value;

        return $this;
    }

    /**
     * 会员ID
     * @param int $value
     * @return $this
     */
    public function setUserid(int $value): self
    {
        $this->userid = $value;

        return $this;
    }

    /**
     * 类型
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 描述
     * @param string $value
     * @return $this
     */
    public function setDes(string $value): self
    {
        $this->des = $value;

        return $this;
    }

    /**
     * 推荐
     * @param int $value
     * @return $this
     */
    public function setTj(int $value): self
    {
        $this->tj = $value;

        return $this;
    }

    /**
     * 数量
     * @param int $value
     * @return $this
     */
    public function setNums(int $value): self
    {
        $this->nums = $value;

        return $this;
    }

    /**
     * 图片
     * @param string $value
     * @return $this
     */
    public function setPic(string $value): self
    {
        $this->pic = $value;

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
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * 类别ID
     * @return int
     */
    public function getSysCat()
    {
        return $this->sysCat;
    }

    /**
     * 会员ID
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * 类型
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 描述
     * @return string
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * 推荐
     * @return int
     */
    public function getTj()
    {
        return $this->tj;
    }

    /**
     * 数量
     * @return int
     */
    public function getNums()
    {
        return $this->nums;
    }

    /**
     * 图片
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

}

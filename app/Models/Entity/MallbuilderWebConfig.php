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
 * 网站配置表

 * @Entity()
 * @Table(name="mallbuilder_web_config")
 * @uses      MallbuilderWebConfig
 */
class MallbuilderWebConfig extends Model
{
    /**
     * @var int $id 主键ＩＤ
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $index 数组下标
     * @Column(name="index", type="string", length=30)
     * @Required()
     */
    private $index;

    /**
     * @var string $value 数组值
     * @Column(name="value", type="text", length=65535)
     * @Required()
     */
    private $value;

    /**
     * @var int $statu 状态值，1可能，0不可用
     * @Column(name="statu", type="tinyint", default=1)
     */
    private $statu;

    /**
     * @var string $type 类型
     * @Column(name="type", type="string", length=50)
     */
    private $type;

    /**
     * @var string $des 描述
     * @Column(name="des", type="text", length=65535)
     */
    private $des;

    /**
     * 主键ＩＤ
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 数组下标
     * @param string $value
     * @return $this
     */
    public function setIndex(string $value): self
    {
        $this->index = $value;

        return $this;
    }

    /**
     * 数组值
     * @param string $value
     * @return $this
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * 状态值，1可能，0不可用
     * @param int $value
     * @return $this
     */
    public function setStatu(int $value): self
    {
        $this->statu = $value;

        return $this;
    }

    /**
     * 类型
     * @param string $value
     * @return $this
     */
    public function setType(string $value): self
    {
        $this->type = $value;

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
     * 主键ＩＤ
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 数组下标
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * 数组值
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * 状态值，1可能，0不可用
     * @return mixed
     */
    public function getStatu()
    {
        return $this->statu;
    }

    /**
     * 类型
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 描述
     * @return string
     */
    public function getDes()
    {
        return $this->des;
    }

}

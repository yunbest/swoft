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
 * 客服表

 * @Entity()
 * @Table(name="mallbuilder_custom_service")
 * @uses      MallbuilderCustomService
 */
class MallbuilderCustomService extends Model
{
    /**
     * @var int $id 客服id
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $uid 会员id
     * @Column(name="uid", type="integer")
     * @Required()
     */
    private $uid;

    /**
     * @var string $name 客服名称
     * @Column(name="name", type="string", length=20)
     * @Required()
     */
    private $name;

    /**
     * @var int $tool 客服工具
     * @Column(name="tool", type="tinyint")
     * @Required()
     */
    private $tool;

    /**
     * @var string $number 客服账号
     * @Column(name="number", type="string", length=30)
     * @Required()
     */
    private $number;

    /**
     * @var int $type 客服类型 0-售前客服 1-售后客服
     * @Column(name="type", type="tinyint")
     * @Required()
     */
    private $type;

    /**
     * 客服id
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 会员id
     * @param int $value
     * @return $this
     */
    public function setUid(int $value): self
    {
        $this->uid = $value;

        return $this;
    }

    /**
     * 客服名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 客服工具
     * @param int $value
     * @return $this
     */
    public function setTool(int $value): self
    {
        $this->tool = $value;

        return $this;
    }

    /**
     * 客服账号
     * @param string $value
     * @return $this
     */
    public function setNumber(string $value): self
    {
        $this->number = $value;

        return $this;
    }

    /**
     * 客服类型 0-售前客服 1-售后客服
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 客服id
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 会员id
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * 客服名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 客服工具
     * @return int
     */
    public function getTool()
    {
        return $this->tool;
    }

    /**
     * 客服账号
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * 客服类型 0-售前客服 1-售后客服
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

}

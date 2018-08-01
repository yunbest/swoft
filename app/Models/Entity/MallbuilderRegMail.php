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
 * 注册邮件信息表

 * @Entity()
 * @Table(name="mallbuilder_reg_mail")
 * @uses      MallbuilderRegMail
 */
class MallbuilderRegMail extends Model
{
    /**
     * @var int $id 编号
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $email 邮箱
     * @Column(name="email", type="string", length=100)
     * @Required()
     */
    private $email;

    /**
     * @var string $checkCode 注册key
     * @Column(name="check_code", type="string", length=35)
     * @Required()
     */
    private $checkCode;

    /**
     * @var int $createTime 邮件发送时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var int $endTime 有效时间
     * @Column(name="end_time", type="integer")
     * @Required()
     */
    private $endTime;

    /**
     * @var int $connectId 链接ID
     * @Column(name="connect_id", type="integer", default=0)
     */
    private $connectId;

    /**
     * 编号
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 邮箱
     * @param string $value
     * @return $this
     */
    public function setEmail(string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * 注册key
     * @param string $value
     * @return $this
     */
    public function setCheckCode(string $value): self
    {
        $this->checkCode = $value;

        return $this;
    }

    /**
     * 邮件发送时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 有效时间
     * @param int $value
     * @return $this
     */
    public function setEndTime(int $value): self
    {
        $this->endTime = $value;

        return $this;
    }

    /**
     * 链接ID
     * @param int $value
     * @return $this
     */
    public function setConnectId(int $value): self
    {
        $this->connectId = $value;

        return $this;
    }

    /**
     * 编号
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 邮箱
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * 注册key
     * @return string
     */
    public function getCheckCode()
    {
        return $this->checkCode;
    }

    /**
     * 邮件发送时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 有效时间
     * @return int
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * 链接ID
     * @return int
     */
    public function getConnectId()
    {
        return $this->connectId;
    }

}

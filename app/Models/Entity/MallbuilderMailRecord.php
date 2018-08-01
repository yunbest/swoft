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
 * 邮件群发日志表

 * @Entity()
 * @Table(name="mallbuilder_mail_record")
 * @uses      MallbuilderMailRecord
 */
class MallbuilderMailRecord extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $sendmailname 发送者
     * @Column(name="sendmailname", type="string", length=20)
     */
    private $sendmailname;

    /**
     * @var string $sendtime 发送时间
     * @Column(name="sendtime", type="datetime")
     */
    private $sendtime;

    /**
     * @var string $sendmailrecord 发送记录
     * @Column(name="sendmailrecord", type="text", length=65535)
     */
    private $sendmailrecord;

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
     * 发送者
     * @param string $value
     * @return $this
     */
    public function setSendmailname(string $value): self
    {
        $this->sendmailname = $value;

        return $this;
    }

    /**
     * 发送时间
     * @param string $value
     * @return $this
     */
    public function setSendtime(string $value): self
    {
        $this->sendtime = $value;

        return $this;
    }

    /**
     * 发送记录
     * @param string $value
     * @return $this
     */
    public function setSendmailrecord(string $value): self
    {
        $this->sendmailrecord = $value;

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
     * 发送者
     * @return string
     */
    public function getSendmailname()
    {
        return $this->sendmailname;
    }

    /**
     * 发送时间
     * @return string
     */
    public function getSendtime()
    {
        return $this->sendtime;
    }

    /**
     * 发送记录
     * @return string
     */
    public function getSendmailrecord()
    {
        return $this->sendmailrecord;
    }

}

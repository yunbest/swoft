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
 * 站内信表

 * @Entity()
 * @Table(name="mallbuilder_message")
 * @uses      MallbuilderMessage
 */
class MallbuilderMessage extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $touserid 接收者ID
     * @Column(name="touserid", type="integer")
     */
    private $touserid;

    /**
     * @var int $fromuserid 发送者ID
     * @Column(name="fromuserid", type="integer")
     */
    private $fromuserid;

    /**
     * @var string $fromInfo 发送信息
     * @Column(name="fromInfo", type="string", length=250, default="0")
     */
    private $fromInfo;

    /**
     * @var int $msgtype 类型
     * @Column(name="msgtype", type="tinyint", default=1)
     */
    private $msgtype;

    /**
     * @var string $sub 主题
     * @Column(name="sub", type="string", length=50)
     */
    private $sub;

    /**
     * @var string $con 内容
     * @Column(name="con", type="text", length=65535)
     */
    private $con;

    /**
     * @var string $iflook 是否查看
     * @Column(name="iflook", type="string", length=10)
     */
    private $iflook;

    /**
     * @var string $date 发送时间
     * @Column(name="date", type="datetime", default="0000-00-00 00:00:00")
     */
    private $date;

    /**
     * @var int $contype 
     * @Column(name="contype", type="tinyint")
     */
    private $contype;

    /**
     * @var string $tid 
     * @Column(name="tid", type="string", length=50)
     */
    private $tid;

    /**
     * @var string $receiveType 
     * @Column(name="receive_type", type="string", length=200)
     */
    private $receiveType;

    /**
     * @var int $replyBy 回复
     * @Column(name="reply_by", type="integer")
     */
    private $replyBy;

    /**
     * @var string $attachments 附件
     * @Column(name="attachments", type="string", length=50)
     */
    private $attachments;

    /**
     * @var int $isSave 是否保存
     * @Column(name="is_save", type="tinyint", default=0)
     */
    private $isSave;

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
     * 接收者ID
     * @param int $value
     * @return $this
     */
    public function setTouserid(int $value): self
    {
        $this->touserid = $value;

        return $this;
    }

    /**
     * 发送者ID
     * @param int $value
     * @return $this
     */
    public function setFromuserid(int $value): self
    {
        $this->fromuserid = $value;

        return $this;
    }

    /**
     * 发送信息
     * @param string $value
     * @return $this
     */
    public function setFromInfo(string $value): self
    {
        $this->fromInfo = $value;

        return $this;
    }

    /**
     * 类型
     * @param int $value
     * @return $this
     */
    public function setMsgtype(int $value): self
    {
        $this->msgtype = $value;

        return $this;
    }

    /**
     * 主题
     * @param string $value
     * @return $this
     */
    public function setSub(string $value): self
    {
        $this->sub = $value;

        return $this;
    }

    /**
     * 内容
     * @param string $value
     * @return $this
     */
    public function setCon(string $value): self
    {
        $this->con = $value;

        return $this;
    }

    /**
     * 是否查看
     * @param string $value
     * @return $this
     */
    public function setIflook(string $value): self
    {
        $this->iflook = $value;

        return $this;
    }

    /**
     * 发送时间
     * @param string $value
     * @return $this
     */
    public function setDate(string $value): self
    {
        $this->date = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setContype(int $value): self
    {
        $this->contype = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setTid(string $value): self
    {
        $this->tid = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setReceiveType(string $value): self
    {
        $this->receiveType = $value;

        return $this;
    }

    /**
     * 回复
     * @param int $value
     * @return $this
     */
    public function setReplyBy(int $value): self
    {
        $this->replyBy = $value;

        return $this;
    }

    /**
     * 附件
     * @param string $value
     * @return $this
     */
    public function setAttachments(string $value): self
    {
        $this->attachments = $value;

        return $this;
    }

    /**
     * 是否保存
     * @param int $value
     * @return $this
     */
    public function setIsSave(int $value): self
    {
        $this->isSave = $value;

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
     * 接收者ID
     * @return int
     */
    public function getTouserid()
    {
        return $this->touserid;
    }

    /**
     * 发送者ID
     * @return int
     */
    public function getFromuserid()
    {
        return $this->fromuserid;
    }

    /**
     * 发送信息
     * @return string
     */
    public function getFromInfo()
    {
        return $this->fromInfo;
    }

    /**
     * 类型
     * @return mixed
     */
    public function getMsgtype()
    {
        return $this->msgtype;
    }

    /**
     * 主题
     * @return string
     */
    public function getSub()
    {
        return $this->sub;
    }

    /**
     * 内容
     * @return string
     */
    public function getCon()
    {
        return $this->con;
    }

    /**
     * 是否查看
     * @return string
     */
    public function getIflook()
    {
        return $this->iflook;
    }

    /**
     * 发送时间
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return int
     */
    public function getContype()
    {
        return $this->contype;
    }

    /**
     * @return string
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @return string
     */
    public function getReceiveType()
    {
        return $this->receiveType;
    }

    /**
     * 回复
     * @return int
     */
    public function getReplyBy()
    {
        return $this->replyBy;
    }

    /**
     * 附件
     * @return string
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * 是否保存
     * @return int
     */
    public function getIsSave()
    {
        return $this->isSave;
    }

}

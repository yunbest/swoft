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
 * 供求信息回复表

 * @Entity()
 * @Table(name="mallbuilder_offer_reply")
 * @uses      MallbuilderOfferReply
 */
class MallbuilderOfferReply extends Model
{
    /**
     * @var int $orid 自动编号
     * @Id()
     * @Column(name="orid", type="integer")
     */
    private $orid;

    /**
     * @var int $oid 供求ID
     * @Column(name="oid", type="integer", default=0)
     */
    private $oid;

    /**
     * @var int $userid 会员ID
     * @Column(name="userid", type="integer", default=0)
     */
    private $userid;

    /**
     * @var string $replyTitle 标题
     * @Column(name="reply_title", type="string", length=255)
     */
    private $replyTitle;

    /**
     * @var string $replyDetail 内容
     * @Column(name="reply_detail", type="text", length=65535)
     */
    private $replyDetail;

    /**
     * @var string $filename 附件
     * @Column(name="filename", type="string", length=255)
     */
    private $filename;

    /**
     * @var string $replyTel 手机
     * @Column(name="reply_tel", type="string", length=30)
     */
    private $replyTel;

    /**
     * @var string $replyEmail 电子邮箱
     * @Column(name="reply_email", type="string", length=100)
     */
    private $replyEmail;

    /**
     * @var string $replyQq QQ
     * @Column(name="reply_qq", type="string", length=20)
     */
    private $replyQq;

    /**
     * @var string $replyWechat 微信
     * @Column(name="reply_wechat", type="string", length=30)
     */
    private $replyWechat;

    /**
     * @var int $replyCreateTime 建立时间
     * @Column(name="reply_create_time", type="integer")
     */
    private $replyCreateTime;

    /**
     * @var int $replyUpdateTime 更新时间
     * @Column(name="reply_update_time", type="integer")
     */
    private $replyUpdateTime;

    /**
     * @var int $replyStatus 状态:-1删除 0待审核 1审核
     * @Column(name="reply_status", type="tinyint", default=0)
     */
    private $replyStatus;

    /**
     * 自动编号
     * @param int $value
     * @return $this
     */
    public function setOrid(int $value)
    {
        $this->orid = $value;

        return $this;
    }

    /**
     * 供求ID
     * @param int $value
     * @return $this
     */
    public function setOid(int $value): self
    {
        $this->oid = $value;

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
     * 标题
     * @param string $value
     * @return $this
     */
    public function setReplyTitle(string $value): self
    {
        $this->replyTitle = $value;

        return $this;
    }

    /**
     * 内容
     * @param string $value
     * @return $this
     */
    public function setReplyDetail(string $value): self
    {
        $this->replyDetail = $value;

        return $this;
    }

    /**
     * 附件
     * @param string $value
     * @return $this
     */
    public function setFilename(string $value): self
    {
        $this->filename = $value;

        return $this;
    }

    /**
     * 手机
     * @param string $value
     * @return $this
     */
    public function setReplyTel(string $value): self
    {
        $this->replyTel = $value;

        return $this;
    }

    /**
     * 电子邮箱
     * @param string $value
     * @return $this
     */
    public function setReplyEmail(string $value): self
    {
        $this->replyEmail = $value;

        return $this;
    }

    /**
     * QQ
     * @param string $value
     * @return $this
     */
    public function setReplyQq(string $value): self
    {
        $this->replyQq = $value;

        return $this;
    }

    /**
     * 微信
     * @param string $value
     * @return $this
     */
    public function setReplyWechat(string $value): self
    {
        $this->replyWechat = $value;

        return $this;
    }

    /**
     * 建立时间
     * @param int $value
     * @return $this
     */
    public function setReplyCreateTime(int $value): self
    {
        $this->replyCreateTime = $value;

        return $this;
    }

    /**
     * 更新时间
     * @param int $value
     * @return $this
     */
    public function setReplyUpdateTime(int $value): self
    {
        $this->replyUpdateTime = $value;

        return $this;
    }

    /**
     * 状态:-1删除 0待审核 1审核
     * @param int $value
     * @return $this
     */
    public function setReplyStatus(int $value): self
    {
        $this->replyStatus = $value;

        return $this;
    }

    /**
     * 自动编号
     * @return mixed
     */
    public function getOrid()
    {
        return $this->orid;
    }

    /**
     * 供求ID
     * @return int
     */
    public function getOid()
    {
        return $this->oid;
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
     * 标题
     * @return string
     */
    public function getReplyTitle()
    {
        return $this->replyTitle;
    }

    /**
     * 内容
     * @return string
     */
    public function getReplyDetail()
    {
        return $this->replyDetail;
    }

    /**
     * 附件
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * 手机
     * @return string
     */
    public function getReplyTel()
    {
        return $this->replyTel;
    }

    /**
     * 电子邮箱
     * @return string
     */
    public function getReplyEmail()
    {
        return $this->replyEmail;
    }

    /**
     * QQ
     * @return string
     */
    public function getReplyQq()
    {
        return $this->replyQq;
    }

    /**
     * 微信
     * @return string
     */
    public function getReplyWechat()
    {
        return $this->replyWechat;
    }

    /**
     * 建立时间
     * @return int
     */
    public function getReplyCreateTime()
    {
        return $this->replyCreateTime;
    }

    /**
     * 更新时间
     * @return int
     */
    public function getReplyUpdateTime()
    {
        return $this->replyUpdateTime;
    }

    /**
     * 状态:-1删除 0待审核 1审核
     * @return int
     */
    public function getReplyStatus()
    {
        return $this->replyStatus;
    }

}

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
 * 活动表

 * @Entity()
 * @Table(name="mallbuilder_activity")
 * @uses      MallbuilderActivity
 */
class MallbuilderActivity extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $title 活动名
     * @Column(name="title", type="string", length=100)
     * @Required()
     */
    private $title;

    /**
     * @var string $desc 描述
     * @Column(name="desc", type="text", length=65535)
     * @Required()
     */
    private $desc;

    /**
     * @var string $adsCode 广告代码
     * @Column(name="ads_code", type="string", length=255)
     * @Required()
     */
    private $adsCode;

    /**
     * @var int $startTime 开始时间
     * @Column(name="start_time", type="integer")
     * @Required()
     */
    private $startTime;

    /**
     * @var int $endTime 结束时间
     * @Column(name="end_time", type="integer")
     * @Required()
     */
    private $endTime;

    /**
     * @var string $templates 调用模板
     * @Column(name="templates", type="string", length=30)
     * @Required()
     */
    private $templates;

    /**
     * @var int $createTime 创建时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var int $status 状态
     * @Column(name="status", type="tinyint", default=0)
     */
    private $status;

    /**
     * @var int $displayorder 排序
     * @Column(name="displayorder", type="smallint", default=0)
     */
    private $displayorder;

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
     * 活动名
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * 描述
     * @param string $value
     * @return $this
     */
    public function setDesc(string $value): self
    {
        $this->desc = $value;

        return $this;
    }

    /**
     * 广告代码
     * @param string $value
     * @return $this
     */
    public function setAdsCode(string $value): self
    {
        $this->adsCode = $value;

        return $this;
    }

    /**
     * 开始时间
     * @param int $value
     * @return $this
     */
    public function setStartTime(int $value): self
    {
        $this->startTime = $value;

        return $this;
    }

    /**
     * 结束时间
     * @param int $value
     * @return $this
     */
    public function setEndTime(int $value): self
    {
        $this->endTime = $value;

        return $this;
    }

    /**
     * 调用模板
     * @param string $value
     * @return $this
     */
    public function setTemplates(string $value): self
    {
        $this->templates = $value;

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
     * ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 活动名
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 描述
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * 广告代码
     * @return string
     */
    public function getAdsCode()
    {
        return $this->adsCode;
    }

    /**
     * 开始时间
     * @return int
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * 结束时间
     * @return int
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * 调用模板
     * @return string
     */
    public function getTemplates()
    {
        return $this->templates;
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
     * 状态
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 排序
     * @return int
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

}

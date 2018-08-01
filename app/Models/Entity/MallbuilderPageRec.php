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
 * 网站历史流量记录表

 * @Entity()
 * @Table(name="mallbuilder_page_rec")
 * @uses      MallbuilderPageRec
 */
class MallbuilderPageRec extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $totalurl 前一天url总数
     * @Column(name="totalurl", type="integer")
     */
    private $totalurl;

    /**
     * @var string $mostpopularurl 最受欢迎 
     * @Column(name="mostpopularurl", type="string", length=100)
     */
    private $mostpopularurl;

    /**
     * @var int $pageviews 前一天的PV数
     * @Column(name="pageviews", type="integer")
     */
    private $pageviews;

    /**
     * @var int $totalip 前一天ip总数
     * @Column(name="totalip", type="integer", default=0)
     */
    private $totalip;

    /**
     * @var int $visitusernum 前一天上线的会员数
     * @Column(name="visitusernum", type="integer", default=0)
     */
    private $visitusernum;

    /**
     * @var int $reguser 前一天新注册会员数
     * @Column(name="reguser", type="integer", default=0)
     */
    private $reguser;

    /**
     * @var int $pronum 前一天发布产品数
     * @Column(name="pronum", type="integer", default=0)
     */
    private $pronum;

    /**
     * @var int $newsnum 前一天发布资讯数
     * @Column(name="newsnum", type="integer", default=0)
     */
    private $newsnum;

    /**
     * @var int $exhibnum 前一天发布展会数
     * @Column(name="exhibnum", type="integer", default=0)
     */
    private $exhibnum;

    /**
     * @var string $time 时间
     * @Column(name="time", type="datetime")
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
     * 前一天url总数
     * @param int $value
     * @return $this
     */
    public function setTotalurl(int $value): self
    {
        $this->totalurl = $value;

        return $this;
    }

    /**
     * 最受欢迎 
     * @param string $value
     * @return $this
     */
    public function setMostpopularurl(string $value): self
    {
        $this->mostpopularurl = $value;

        return $this;
    }

    /**
     * 前一天的PV数
     * @param int $value
     * @return $this
     */
    public function setPageviews(int $value): self
    {
        $this->pageviews = $value;

        return $this;
    }

    /**
     * 前一天ip总数
     * @param int $value
     * @return $this
     */
    public function setTotalip(int $value): self
    {
        $this->totalip = $value;

        return $this;
    }

    /**
     * 前一天上线的会员数
     * @param int $value
     * @return $this
     */
    public function setVisitusernum(int $value): self
    {
        $this->visitusernum = $value;

        return $this;
    }

    /**
     * 前一天新注册会员数
     * @param int $value
     * @return $this
     */
    public function setReguser(int $value): self
    {
        $this->reguser = $value;

        return $this;
    }

    /**
     * 前一天发布产品数
     * @param int $value
     * @return $this
     */
    public function setPronum(int $value): self
    {
        $this->pronum = $value;

        return $this;
    }

    /**
     * 前一天发布资讯数
     * @param int $value
     * @return $this
     */
    public function setNewsnum(int $value): self
    {
        $this->newsnum = $value;

        return $this;
    }

    /**
     * 前一天发布展会数
     * @param int $value
     * @return $this
     */
    public function setExhibnum(int $value): self
    {
        $this->exhibnum = $value;

        return $this;
    }

    /**
     * 时间
     * @param string $value
     * @return $this
     */
    public function setTime(string $value): self
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
     * 前一天url总数
     * @return int
     */
    public function getTotalurl()
    {
        return $this->totalurl;
    }

    /**
     * 最受欢迎 
     * @return string
     */
    public function getMostpopularurl()
    {
        return $this->mostpopularurl;
    }

    /**
     * 前一天的PV数
     * @return int
     */
    public function getPageviews()
    {
        return $this->pageviews;
    }

    /**
     * 前一天ip总数
     * @return int
     */
    public function getTotalip()
    {
        return $this->totalip;
    }

    /**
     * 前一天上线的会员数
     * @return int
     */
    public function getVisitusernum()
    {
        return $this->visitusernum;
    }

    /**
     * 前一天新注册会员数
     * @return int
     */
    public function getReguser()
    {
        return $this->reguser;
    }

    /**
     * 前一天发布产品数
     * @return int
     */
    public function getPronum()
    {
        return $this->pronum;
    }

    /**
     * 前一天发布资讯数
     * @return int
     */
    public function getNewsnum()
    {
        return $this->newsnum;
    }

    /**
     * 前一天发布展会数
     * @return int
     */
    public function getExhibnum()
    {
        return $this->exhibnum;
    }

    /**
     * 时间
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

}

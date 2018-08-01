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
 * 产品分类表

 * @Entity()
 * @Table(name="mallbuilder_product_cat")
 * @uses      MallbuilderProductCat
 */
class MallbuilderProductCat extends Model
{
    /**
     * @var int $catid ID
     * @Id()
     * @Column(name="catid", type="integer")
     */
    private $catid;

    /**
     * @var string $cat 分类名
     * @Column(name="cat", type="string", length=50)
     */
    private $cat;

    /**
     * @var string $title SEO标题
     * @Column(name="title", type="text", length=65535)
     */
    private $title;

    /**
     * @var string $keyword SEO描述
     * @Column(name="keyword", type="text", length=65535)
     */
    private $keyword;

    /**
     * @var string $description SEO描述
     * @Column(name="description", type="text", length=65535)
     */
    private $description;

    /**
     * @var int $nums 排序
     * @Column(name="nums", type="integer")
     */
    private $nums;

    /**
     * @var int $isindex 推荐显示
     * @Column(name="isindex", type="tinyint", default=0)
     */
    private $isindex;

    /**
     * @var string $charIndex 首字母
     * @Column(name="char_index", type="char", length=1)
     */
    private $charIndex;

    /**
     * @var string $allChar 拼音
     * @Column(name="all_char", type="string", length=50)
     */
    private $allChar;

    /**
     * @var string $pic 图片
     * @Column(name="pic", type="string", length=150)
     */
    private $pic;

    /**
     * @var string $wpic App图片
     * @Column(name="wpic", type="string", length=150)
     */
    private $wpic;

    /**
     * @var string $brand 关联品牌
     * @Column(name="brand", type="text", length=65535)
     */
    private $brand;

    /**
     * @var int $recNums 点击率
     * @Column(name="rec_nums", type="integer", default=0)
     */
    private $recNums;

    /**
     * @var int $isbuy 是否支持购买
     * @Column(name="isbuy", type="tinyint")
     */
    private $isbuy;

    /**
     * @var string $extTable 关连属性表
     * @Column(name="ext_table", type="string", length=30)
     */
    private $extTable;

    /**
     * @var int $extFieldCat 关连属性集
     * @Column(name="ext_field_cat", type="integer")
     */
    private $extFieldCat;

    /**
     * @var int $isSetmeal 是否支持套餐
     * @Column(name="is_setmeal", type="tinyint", default=0)
     */
    private $isSetmeal;

    /**
     * @var float $commission 佣金
     * @Column(name="commission", type="float", default=0)
     */
    private $commission;

    /**
     * @var string $current 点击状态
     * @Column(name="current", type="string", length=100)
     */
    private $current;

    /**
     * @var string $templates 模版
     * @Column(name="templates", type="string", length=100)
     */
    private $templates;

    /**
     * @var string $month 
     * @Column(name="month", type="string", length=30)
     */
    private $month;

    /**
     * @var int $isvirtual 是否为虚拟商品分类
     * @Column(name="isvirtual", type="tinyint", default=0)
     */
    private $isvirtual;

    /**
     * @var int $pid 父级ID
     * @Column(name="pid", type="integer", default=0)
     */
    private $pid;

    /**
     * @var string $dpic 
     * @Column(name="dpic", type="string", length=150)
     */
    private $dpic;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setCatid(int $value)
    {
        $this->catid = $value;

        return $this;
    }

    /**
     * 分类名
     * @param string $value
     * @return $this
     */
    public function setCat(string $value): self
    {
        $this->cat = $value;

        return $this;
    }

    /**
     * SEO标题
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * SEO描述
     * @param string $value
     * @return $this
     */
    public function setKeyword(string $value): self
    {
        $this->keyword = $value;

        return $this;
    }

    /**
     * SEO描述
     * @param string $value
     * @return $this
     */
    public function setDescription(string $value): self
    {
        $this->description = $value;

        return $this;
    }

    /**
     * 排序
     * @param int $value
     * @return $this
     */
    public function setNums(int $value): self
    {
        $this->nums = $value;

        return $this;
    }

    /**
     * 推荐显示
     * @param int $value
     * @return $this
     */
    public function setIsindex(int $value): self
    {
        $this->isindex = $value;

        return $this;
    }

    /**
     * 首字母
     * @param string $value
     * @return $this
     */
    public function setCharIndex(string $value): self
    {
        $this->charIndex = $value;

        return $this;
    }

    /**
     * 拼音
     * @param string $value
     * @return $this
     */
    public function setAllChar(string $value): self
    {
        $this->allChar = $value;

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
     * App图片
     * @param string $value
     * @return $this
     */
    public function setWpic(string $value): self
    {
        $this->wpic = $value;

        return $this;
    }

    /**
     * 关联品牌
     * @param string $value
     * @return $this
     */
    public function setBrand(string $value): self
    {
        $this->brand = $value;

        return $this;
    }

    /**
     * 点击率
     * @param int $value
     * @return $this
     */
    public function setRecNums(int $value): self
    {
        $this->recNums = $value;

        return $this;
    }

    /**
     * 是否支持购买
     * @param int $value
     * @return $this
     */
    public function setIsbuy(int $value): self
    {
        $this->isbuy = $value;

        return $this;
    }

    /**
     * 关连属性表
     * @param string $value
     * @return $this
     */
    public function setExtTable(string $value): self
    {
        $this->extTable = $value;

        return $this;
    }

    /**
     * 关连属性集
     * @param int $value
     * @return $this
     */
    public function setExtFieldCat(int $value): self
    {
        $this->extFieldCat = $value;

        return $this;
    }

    /**
     * 是否支持套餐
     * @param int $value
     * @return $this
     */
    public function setIsSetmeal(int $value): self
    {
        $this->isSetmeal = $value;

        return $this;
    }

    /**
     * 佣金
     * @param float $value
     * @return $this
     */
    public function setCommission(float $value): self
    {
        $this->commission = $value;

        return $this;
    }

    /**
     * 点击状态
     * @param string $value
     * @return $this
     */
    public function setCurrent(string $value): self
    {
        $this->current = $value;

        return $this;
    }

    /**
     * 模版
     * @param string $value
     * @return $this
     */
    public function setTemplates(string $value): self
    {
        $this->templates = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setMonth(string $value): self
    {
        $this->month = $value;

        return $this;
    }

    /**
     * 是否为虚拟商品分类
     * @param int $value
     * @return $this
     */
    public function setIsvirtual(int $value): self
    {
        $this->isvirtual = $value;

        return $this;
    }

    /**
     * 父级ID
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDpic(string $value): self
    {
        $this->dpic = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * 分类名
     * @return string
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * SEO标题
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * SEO描述
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * SEO描述
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * 排序
     * @return int
     */
    public function getNums()
    {
        return $this->nums;
    }

    /**
     * 推荐显示
     * @return int
     */
    public function getIsindex()
    {
        return $this->isindex;
    }

    /**
     * 首字母
     * @return string
     */
    public function getCharIndex()
    {
        return $this->charIndex;
    }

    /**
     * 拼音
     * @return string
     */
    public function getAllChar()
    {
        return $this->allChar;
    }

    /**
     * 图片
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * App图片
     * @return string
     */
    public function getWpic()
    {
        return $this->wpic;
    }

    /**
     * 关联品牌
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * 点击率
     * @return int
     */
    public function getRecNums()
    {
        return $this->recNums;
    }

    /**
     * 是否支持购买
     * @return int
     */
    public function getIsbuy()
    {
        return $this->isbuy;
    }

    /**
     * 关连属性表
     * @return string
     */
    public function getExtTable()
    {
        return $this->extTable;
    }

    /**
     * 关连属性集
     * @return int
     */
    public function getExtFieldCat()
    {
        return $this->extFieldCat;
    }

    /**
     * 是否支持套餐
     * @return int
     */
    public function getIsSetmeal()
    {
        return $this->isSetmeal;
    }

    /**
     * 佣金
     * @return float
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * 点击状态
     * @return string
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * 模版
     * @return string
     */
    public function getTemplates()
    {
        return $this->templates;
    }

    /**
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * 是否为虚拟商品分类
     * @return int
     */
    public function getIsvirtual()
    {
        return $this->isvirtual;
    }

    /**
     * 父级ID
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @return string
     */
    public function getDpic()
    {
        return $this->dpic;
    }

}

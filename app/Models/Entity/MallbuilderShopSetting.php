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
 * 店铺自定义配置表

 * @Entity()
 * @Table(name="mallbuilder_shop_setting")
 * @uses      MallbuilderShopSetting
 */
class MallbuilderShopSetting extends Model
{
    /**
     * @var int $shopId ID
     * @Column(name="shop_id", type="integer")
     * @Required()
     */
    private $shopId;

    /**
     * @var string $shopLogo 店铺logo
     * @Column(name="shop_logo", type="string", length=255)
     */
    private $shopLogo;

    /**
     * @var string $shopBanner 店铺横幅
     * @Column(name="shop_banner", type="string", length=255)
     */
    private $shopBanner;

    /**
     * @var string $shopTitle seo标题
     * @Column(name="shop_title", type="string", length=255)
     */
    private $shopTitle;

    /**
     * @var string $shopKeywords seo关键字
     * @Column(name="shop_keywords", type="string", length=255)
     */
    private $shopKeywords;

    /**
     * @var string $shopDescription seo描述
     * @Column(name="shop_description", type="string", length=255)
     */
    private $shopDescription;

    /**
     * @var string $shopSlide 店铺幻灯片
     * @Column(name="shop_slide", type="text", length=65535)
     */
    private $shopSlide;

    /**
     * @var string $shopSlideurl 店铺幻灯片url
     * @Column(name="shop_slideurl", type="text", length=65535)
     */
    private $shopSlideurl;

    /**
     * @var string $commonCat 常用类别
     * @Column(name="common_cat", type="text", length=65535)
     */
    private $commonCat;

    /**
     * @var string $wapBannar wap端店铺首页bannar图
     * @Column(name="wap_bannar", type="string", length=255)
     * @Required()
     */
    private $wapBannar;

    /**
     * @var string $wapLogo 手机端店铺logo
     * @Column(name="wap_logo", type="string", length=255)
     * @Required()
     */
    private $wapLogo;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setShopId(int $value): self
    {
        $this->shopId = $value;

        return $this;
    }

    /**
     * 店铺logo
     * @param string $value
     * @return $this
     */
    public function setShopLogo(string $value): self
    {
        $this->shopLogo = $value;

        return $this;
    }

    /**
     * 店铺横幅
     * @param string $value
     * @return $this
     */
    public function setShopBanner(string $value): self
    {
        $this->shopBanner = $value;

        return $this;
    }

    /**
     * seo标题
     * @param string $value
     * @return $this
     */
    public function setShopTitle(string $value): self
    {
        $this->shopTitle = $value;

        return $this;
    }

    /**
     * seo关键字
     * @param string $value
     * @return $this
     */
    public function setShopKeywords(string $value): self
    {
        $this->shopKeywords = $value;

        return $this;
    }

    /**
     * seo描述
     * @param string $value
     * @return $this
     */
    public function setShopDescription(string $value): self
    {
        $this->shopDescription = $value;

        return $this;
    }

    /**
     * 店铺幻灯片
     * @param string $value
     * @return $this
     */
    public function setShopSlide(string $value): self
    {
        $this->shopSlide = $value;

        return $this;
    }

    /**
     * 店铺幻灯片url
     * @param string $value
     * @return $this
     */
    public function setShopSlideurl(string $value): self
    {
        $this->shopSlideurl = $value;

        return $this;
    }

    /**
     * 常用类别
     * @param string $value
     * @return $this
     */
    public function setCommonCat(string $value): self
    {
        $this->commonCat = $value;

        return $this;
    }

    /**
     * wap端店铺首页bannar图
     * @param string $value
     * @return $this
     */
    public function setWapBannar(string $value): self
    {
        $this->wapBannar = $value;

        return $this;
    }

    /**
     * 手机端店铺logo
     * @param string $value
     * @return $this
     */
    public function setWapLogo(string $value): self
    {
        $this->wapLogo = $value;

        return $this;
    }

    /**
     * ID
     * @return int
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * 店铺logo
     * @return string
     */
    public function getShopLogo()
    {
        return $this->shopLogo;
    }

    /**
     * 店铺横幅
     * @return string
     */
    public function getShopBanner()
    {
        return $this->shopBanner;
    }

    /**
     * seo标题
     * @return string
     */
    public function getShopTitle()
    {
        return $this->shopTitle;
    }

    /**
     * seo关键字
     * @return string
     */
    public function getShopKeywords()
    {
        return $this->shopKeywords;
    }

    /**
     * seo描述
     * @return string
     */
    public function getShopDescription()
    {
        return $this->shopDescription;
    }

    /**
     * 店铺幻灯片
     * @return string
     */
    public function getShopSlide()
    {
        return $this->shopSlide;
    }

    /**
     * 店铺幻灯片url
     * @return string
     */
    public function getShopSlideurl()
    {
        return $this->shopSlideurl;
    }

    /**
     * 常用类别
     * @return string
     */
    public function getCommonCat()
    {
        return $this->commonCat;
    }

    /**
     * wap端店铺首页bannar图
     * @return string
     */
    public function getWapBannar()
    {
        return $this->wapBannar;
    }

    /**
     * 手机端店铺logo
     * @return string
     */
    public function getWapLogo()
    {
        return $this->wapLogo;
    }

}

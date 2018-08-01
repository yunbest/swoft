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
 * 品牌厂家表

 * @Entity()
 * @Table(name="mallbuilder_manufactor")
 * @uses      MallbuilderManufactor
 */
class MallbuilderManufactor extends Model
{
    /**
     * @var int $userid 
     * @Id()
     * @Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var string $user 厂家名称
     * @Column(name="user", type="string", length=50)
     */
    private $user;

    /**
     * @var string $shopSn 商家编码
     * @Column(name="shop_sn", type="string", length=255, default="NULL")
     */
    private $shopSn;

    /**
     * @var string $password 厂家密码
     * @Column(name="password", type="string", length=50, default="null")
     */
    private $password;

    /**
     * @var string $email 邮件地址
     * @Column(name="email", type="string", length=255, default="NULL")
     */
    private $email;

    /**
     * @var string $brandAddress 品牌仓地址
     * @Column(name="brand_address", type="string", length=255, default="NULL")
     */
    private $brandAddress;

    /**
     * @var string $brandIds 已上架品牌
     * @Column(name="brand_ids", type="string", length=255)
     */
    private $brandIds;

    /**
     * @var int $roleId 角色ID 0：管理员 1：品牌仓专员  2：品牌仓财务
     * @Column(name="role_id", type="integer")
     */
    private $roleId;

    /**
     * @var string $rules 权限列表 1：订单打包  2：对帐单 3：商品维护 4：库存预警  5：结算审批  6：财务跟踪  7：财务报告  8：用户中心
     * @Column(name="rules", type="string", length=255)
     */
    private $rules;

    /**
     * @var string $country 所属国家
     * @Column(name="country", type="string", length=50)
     */
    private $country;

    /**
     * @var string $baseCurrency 基本币种
     * @Column(name="base_currency", type="string", length=50)
     */
    private $baseCurrency;

    /**
     * @param int $value
     * @return $this
     */
    public function setUserid(int $value)
    {
        $this->userid = $value;

        return $this;
    }

    /**
     * 厂家名称
     * @param string $value
     * @return $this
     */
    public function setUser(string $value): self
    {
        $this->user = $value;

        return $this;
    }

    /**
     * 商家编码
     * @param string $value
     * @return $this
     */
    public function setShopSn(string $value): self
    {
        $this->shopSn = $value;

        return $this;
    }

    /**
     * 厂家密码
     * @param string $value
     * @return $this
     */
    public function setPassword(string $value): self
    {
        $this->password = $value;

        return $this;
    }

    /**
     * 邮件地址
     * @param string $value
     * @return $this
     */
    public function setEmail(string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * 品牌仓地址
     * @param string $value
     * @return $this
     */
    public function setBrandAddress(string $value): self
    {
        $this->brandAddress = $value;

        return $this;
    }

    /**
     * 已上架品牌
     * @param string $value
     * @return $this
     */
    public function setBrandIds(string $value): self
    {
        $this->brandIds = $value;

        return $this;
    }

    /**
     * 角色ID 0：管理员 1：品牌仓专员  2：品牌仓财务
     * @param int $value
     * @return $this
     */
    public function setRoleId(int $value): self
    {
        $this->roleId = $value;

        return $this;
    }

    /**
     * 权限列表 1：订单打包  2：对帐单 3：商品维护 4：库存预警  5：结算审批  6：财务跟踪  7：财务报告  8：用户中心
     * @param string $value
     * @return $this
     */
    public function setRules(string $value): self
    {
        $this->rules = $value;

        return $this;
    }

    /**
     * 所属国家
     * @param string $value
     * @return $this
     */
    public function setCountry(string $value): self
    {
        $this->country = $value;

        return $this;
    }

    /**
     * 基本币种
     * @param string $value
     * @return $this
     */
    public function setBaseCurrency(string $value): self
    {
        $this->baseCurrency = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * 厂家名称
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 商家编码
     * @return mixed
     */
    public function getShopSn()
    {
        return $this->shopSn;
    }

    /**
     * 厂家密码
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * 邮件地址
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * 品牌仓地址
     * @return mixed
     */
    public function getBrandAddress()
    {
        return $this->brandAddress;
    }

    /**
     * 已上架品牌
     * @return string
     */
    public function getBrandIds()
    {
        return $this->brandIds;
    }

    /**
     * 角色ID 0：管理员 1：品牌仓专员  2：品牌仓财务
     * @return int
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * 权限列表 1：订单打包  2：对帐单 3：商品维护 4：库存预警  5：结算审批  6：财务跟踪  7：财务报告  8：用户中心
     * @return string
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * 所属国家
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * 基本币种
     * @return string
     */
    public function getBaseCurrency()
    {
        return $this->baseCurrency;
    }

}

<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CustomerTransfer extends AbstractTransfer
{
    const BRAND_COLLECTION = 'brandCollection';

    const PRODUCT_LIST_COLLECTION = 'productListCollection';

    const IS_ON_BEHALF = 'isOnBehalf';

    const COMPANY_USER_TRANSFER = 'companyUserTransfer';

    const PERMISSIONS = 'permissions';

    const COMPANY_USER_INVITATION_HASH = 'companyUserInvitationHash';

    const ID_CUSTOMER = 'idCustomer';

    const FK_USER = 'fkUser';

    const USERNAME = 'username';

    const EMAIL = 'email';

    const CUSTOMER_REFERENCE = 'customerReference';

    const FIRST_NAME = 'firstName';

    const LAST_NAME = 'lastName';

    const COMPANY = 'company';

    const GENDER = 'gender';

    const DATE_OF_BIRTH = 'dateOfBirth';

    const SALUTATION = 'salutation';

    const PASSWORD = 'password';

    const NEW_PASSWORD = 'newPassword';

    const BILLING_ADDRESS = 'billingAddress';

    const SHIPPING_ADDRESS = 'shippingAddress';

    const ADDRESSES = 'addresses';

    const DEFAULT_BILLING_ADDRESS = 'defaultBillingAddress';

    const DEFAULT_SHIPPING_ADDRESS = 'defaultShippingAddress';

    const CREATED_AT = 'createdAt';

    const UPDATED_AT = 'updatedAt';

    const RESTORE_PASSWORD_KEY = 'restorePasswordKey';

    const RESTORE_PASSWORD_LINK = 'restorePasswordLink';

    const RESTORE_PASSWORD_DATE = 'restorePasswordDate';

    const REGISTRATION_KEY = 'registrationKey';

    const CONFIRMATION_LINK = 'confirmationLink';

    const REGISTERED = 'registered';

    const MESSAGE = 'message';

    const SEND_PASSWORD_TOKEN = 'sendPasswordToken';

    const IS_GUEST = 'isGuest';

    const LOCALE = 'locale';

    const ANONYMIZED_AT = 'anonymizedAt';

    const PHONE = 'phone';

    const IS_DIRTY = 'isDirty';

    /**
     * @var \Generated\Shared\Transfer\BrandCollectionTransfer|null
     */
    protected $brandCollection;

    /**
     * @var \Generated\Shared\Transfer\CustomerProductListCollectionTransfer|null
     */
    protected $productListCollection;

    /**
     * @var bool|null
     */
    protected $isOnBehalf;

    /**
     * @var \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    protected $companyUserTransfer;

    /**
     * @var \Generated\Shared\Transfer\PermissionCollectionTransfer|null
     */
    protected $permissions;

    /**
     * @var string|null
     */
    protected $companyUserInvitationHash;

    /**
     * @var int|null
     */
    protected $idCustomer;

    /**
     * @var int|null
     */
    protected $fkUser;

    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var string|null
     */
    protected $lastName;

    /**
     * @var string|null
     */
    protected $company;

    /**
     * @var string|null
     */
    protected $gender;

    /**
     * @var string|null
     */
    protected $dateOfBirth;

    /**
     * @var string|null
     */
    protected $salutation;

    /**
     * @var string|null
     */
    protected $password;

    /**
     * @var string|null
     */
    protected $newPassword;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[]|null
     */
    protected $billingAddress;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[]|null
     */
    protected $shippingAddress;

    /**
     * @var \Generated\Shared\Transfer\AddressesTransfer|null
     */
    protected $addresses;

    /**
     * @var string|null
     */
    protected $defaultBillingAddress;

    /**
     * @var string|null
     */
    protected $defaultShippingAddress;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var string|null
     */
    protected $updatedAt;

    /**
     * @var string|null
     */
    protected $restorePasswordKey;

    /**
     * @var string|null
     */
    protected $restorePasswordLink;

    /**
     * @var string|null
     */
    protected $restorePasswordDate;

    /**
     * @var string|null
     */
    protected $registrationKey;

    /**
     * @var string|null
     */
    protected $confirmationLink;

    /**
     * @var string|null
     */
    protected $registered;

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var bool|null
     */
    protected $sendPasswordToken;

    /**
     * @var bool|null
     */
    protected $isGuest;

    /**
     * @var \Generated\Shared\Transfer\LocaleTransfer|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $anonymizedAt;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var bool|null
     */
    protected $isDirty;

    /**
     * @var array
     */
    protected $transferPropertyNameMap = [
        'brand_collection' => 'brandCollection',
        'brandCollection' => 'brandCollection',
        'BrandCollection' => 'brandCollection',
        'product_list_collection' => 'productListCollection',
        'productListCollection' => 'productListCollection',
        'ProductListCollection' => 'productListCollection',
        'is_on_behalf' => 'isOnBehalf',
        'isOnBehalf' => 'isOnBehalf',
        'IsOnBehalf' => 'isOnBehalf',
        'company_user_transfer' => 'companyUserTransfer',
        'companyUserTransfer' => 'companyUserTransfer',
        'CompanyUserTransfer' => 'companyUserTransfer',
        'permissions' => 'permissions',
        'Permissions' => 'permissions',
        'company_user_invitation_hash' => 'companyUserInvitationHash',
        'companyUserInvitationHash' => 'companyUserInvitationHash',
        'CompanyUserInvitationHash' => 'companyUserInvitationHash',
        'id_customer' => 'idCustomer',
        'idCustomer' => 'idCustomer',
        'IdCustomer' => 'idCustomer',
        'fk_user' => 'fkUser',
        'fkUser' => 'fkUser',
        'FkUser' => 'fkUser',
        'username' => 'username',
        'Username' => 'username',
        'email' => 'email',
        'Email' => 'email',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'company' => 'company',
        'Company' => 'company',
        'gender' => 'gender',
        'Gender' => 'gender',
        'date_of_birth' => 'dateOfBirth',
        'dateOfBirth' => 'dateOfBirth',
        'DateOfBirth' => 'dateOfBirth',
        'salutation' => 'salutation',
        'Salutation' => 'salutation',
        'password' => 'password',
        'Password' => 'password',
        'new_password' => 'newPassword',
        'newPassword' => 'newPassword',
        'NewPassword' => 'newPassword',
        'billing_address' => 'billingAddress',
        'billingAddress' => 'billingAddress',
        'BillingAddress' => 'billingAddress',
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'addresses' => 'addresses',
        'Addresses' => 'addresses',
        'default_billing_address' => 'defaultBillingAddress',
        'defaultBillingAddress' => 'defaultBillingAddress',
        'DefaultBillingAddress' => 'defaultBillingAddress',
        'default_shipping_address' => 'defaultShippingAddress',
        'defaultShippingAddress' => 'defaultShippingAddress',
        'DefaultShippingAddress' => 'defaultShippingAddress',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'restore_password_key' => 'restorePasswordKey',
        'restorePasswordKey' => 'restorePasswordKey',
        'RestorePasswordKey' => 'restorePasswordKey',
        'restore_password_link' => 'restorePasswordLink',
        'restorePasswordLink' => 'restorePasswordLink',
        'RestorePasswordLink' => 'restorePasswordLink',
        'restore_password_date' => 'restorePasswordDate',
        'restorePasswordDate' => 'restorePasswordDate',
        'RestorePasswordDate' => 'restorePasswordDate',
        'registration_key' => 'registrationKey',
        'registrationKey' => 'registrationKey',
        'RegistrationKey' => 'registrationKey',
        'confirmation_link' => 'confirmationLink',
        'confirmationLink' => 'confirmationLink',
        'ConfirmationLink' => 'confirmationLink',
        'registered' => 'registered',
        'Registered' => 'registered',
        'message' => 'message',
        'Message' => 'message',
        'send_password_token' => 'sendPasswordToken',
        'sendPasswordToken' => 'sendPasswordToken',
        'SendPasswordToken' => 'sendPasswordToken',
        'is_guest' => 'isGuest',
        'isGuest' => 'isGuest',
        'IsGuest' => 'isGuest',
        'locale' => 'locale',
        'Locale' => 'locale',
        'anonymized_at' => 'anonymizedAt',
        'anonymizedAt' => 'anonymizedAt',
        'AnonymizedAt' => 'anonymizedAt',
        'phone' => 'phone',
        'Phone' => 'phone',
        'is_dirty' => 'isDirty',
        'isDirty' => 'isDirty',
        'IsDirty' => 'isDirty',
    ];

    /**
     * @var array
     */
    protected $transferMetadata = [
        self::BRAND_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\BrandCollectionTransfer',
            'name_underscore' => 'brand_collection',
            'is_collection' => false,
            'is_transfer' => true,
        ],
        self::PRODUCT_LIST_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\CustomerProductListCollectionTransfer',
            'name_underscore' => 'product_list_collection',
            'is_collection' => false,
            'is_transfer' => true,
        ],
        self::IS_ON_BEHALF => [
            'type' => 'bool',
            'name_underscore' => 'is_on_behalf',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::COMPANY_USER_TRANSFER => [
            'type' => 'Generated\Shared\Transfer\CompanyUserTransfer',
            'name_underscore' => 'company_user_transfer',
            'is_collection' => false,
            'is_transfer' => true,
        ],
        self::PERMISSIONS => [
            'type' => 'Generated\Shared\Transfer\PermissionCollectionTransfer',
            'name_underscore' => 'permissions',
            'is_collection' => false,
            'is_transfer' => true,
        ],
        self::COMPANY_USER_INVITATION_HASH => [
            'type' => 'string',
            'name_underscore' => 'company_user_invitation_hash',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::ID_CUSTOMER => [
            'type' => 'int',
            'name_underscore' => 'id_customer',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::FK_USER => [
            'type' => 'int',
            'name_underscore' => 'fk_user',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::USERNAME => [
            'type' => 'string',
            'name_underscore' => 'username',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::EMAIL => [
            'type' => 'string',
            'name_underscore' => 'email',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::CUSTOMER_REFERENCE => [
            'type' => 'string',
            'name_underscore' => 'customer_reference',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::FIRST_NAME => [
            'type' => 'string',
            'name_underscore' => 'first_name',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::LAST_NAME => [
            'type' => 'string',
            'name_underscore' => 'last_name',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::COMPANY => [
            'type' => 'string',
            'name_underscore' => 'company',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::GENDER => [
            'type' => 'string',
            'name_underscore' => 'gender',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::DATE_OF_BIRTH => [
            'type' => 'string',
            'name_underscore' => 'date_of_birth',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::SALUTATION => [
            'type' => 'string',
            'name_underscore' => 'salutation',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::PASSWORD => [
            'type' => 'string',
            'name_underscore' => 'password',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::NEW_PASSWORD => [
            'type' => 'string',
            'name_underscore' => 'new_password',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::BILLING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\AddressTransfer',
            'name_underscore' => 'billing_address',
            'is_collection' => true,
            'is_transfer' => true,
        ],
        self::SHIPPING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\AddressTransfer',
            'name_underscore' => 'shipping_address',
            'is_collection' => true,
            'is_transfer' => true,
        ],
        self::ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\AddressesTransfer',
            'name_underscore' => 'addresses',
            'is_collection' => false,
            'is_transfer' => true,
        ],
        self::DEFAULT_BILLING_ADDRESS => [
            'type' => 'string',
            'name_underscore' => 'default_billing_address',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::DEFAULT_SHIPPING_ADDRESS => [
            'type' => 'string',
            'name_underscore' => 'default_shipping_address',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::CREATED_AT => [
            'type' => 'string',
            'name_underscore' => 'created_at',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::UPDATED_AT => [
            'type' => 'string',
            'name_underscore' => 'updated_at',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::RESTORE_PASSWORD_KEY => [
            'type' => 'string',
            'name_underscore' => 'restore_password_key',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::RESTORE_PASSWORD_LINK => [
            'type' => 'string',
            'name_underscore' => 'restore_password_link',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::RESTORE_PASSWORD_DATE => [
            'type' => 'string',
            'name_underscore' => 'restore_password_date',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::REGISTRATION_KEY => [
            'type' => 'string',
            'name_underscore' => 'registration_key',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::CONFIRMATION_LINK => [
            'type' => 'string',
            'name_underscore' => 'confirmation_link',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::REGISTERED => [
            'type' => 'string',
            'name_underscore' => 'registered',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::MESSAGE => [
            'type' => 'string',
            'name_underscore' => 'message',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::SEND_PASSWORD_TOKEN => [
            'type' => 'bool',
            'name_underscore' => 'send_password_token',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::IS_GUEST => [
            'type' => 'bool',
            'name_underscore' => 'is_guest',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::LOCALE => [
            'type' => 'Generated\Shared\Transfer\LocaleTransfer',
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => true,
        ],
        self::ANONYMIZED_AT => [
            'type' => 'string',
            'name_underscore' => 'anonymized_at',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::PHONE => [
            'type' => 'string',
            'name_underscore' => 'phone',
            'is_collection' => false,
            'is_transfer' => false,
        ],
        self::IS_DIRTY => [
            'type' => 'bool',
            'name_underscore' => 'is_dirty',
            'is_collection' => false,
            'is_transfer' => false,
        ],
    ];

    /**
     * @module BrandCustomer
     *
     * @param \Generated\Shared\Transfer\BrandCollectionTransfer|null $brandCollection
     *
     * @return $this
     */
    public function setBrandCollection(BrandCollectionTransfer $brandCollection = null)
    {
        $this->brandCollection = $brandCollection;
        $this->modifiedProperties[self::BRAND_COLLECTION] = true;

        return $this;
    }

    /**
     * @module BrandCustomer
     *
     * @return \Generated\Shared\Transfer\BrandCollectionTransfer|null
     */
    public function getBrandCollection()
    {
        return $this->brandCollection;
    }

    /**
     * @module BrandCustomer
     *
     * @return $this
     */
    public function requireBrandCollection()
    {
        $this->assertPropertyIsSet(self::BRAND_COLLECTION);

        return $this;
    }

    /**
     * @module ProductList
     *
     * @param \Generated\Shared\Transfer\CustomerProductListCollectionTransfer|null $productListCollection
     *
     * @return $this
     */
    public function setProductListCollection(CustomerProductListCollectionTransfer $productListCollection = null)
    {
        $this->productListCollection = $productListCollection;
        $this->modifiedProperties[self::PRODUCT_LIST_COLLECTION] = true;

        return $this;
    }

    /**
     * @module ProductList
     *
     * @return \Generated\Shared\Transfer\CustomerProductListCollectionTransfer|null
     */
    public function getProductListCollection()
    {
        return $this->productListCollection;
    }

    /**
     * @module ProductList
     *
     * @return $this
     */
    public function requireProductListCollection()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LIST_COLLECTION);

        return $this;
    }

    /**
     * @module BusinessOnBehalf
     *
     * @param bool|null $isOnBehalf
     *
     * @return $this
     */
    public function setIsOnBehalf($isOnBehalf)
    {
        $this->isOnBehalf = $isOnBehalf;
        $this->modifiedProperties[self::IS_ON_BEHALF] = true;

        return $this;
    }

    /**
     * @module BusinessOnBehalf
     *
     * @return bool|null
     */
    public function getIsOnBehalf()
    {
        return $this->isOnBehalf;
    }

    /**
     * @module BusinessOnBehalf
     *
     * @return $this
     */
    public function requireIsOnBehalf()
    {
        $this->assertPropertyIsSet(self::IS_ON_BEHALF);

        return $this;
    }

    /**
     * @module BusinessOnBehalf|CompanyUserInvitation|CompanyUser|PersistentCart|Quote
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer|null $companyUserTransfer
     *
     * @return $this
     */
    public function setCompanyUserTransfer(CompanyUserTransfer $companyUserTransfer = null)
    {
        $this->companyUserTransfer = $companyUserTransfer;
        $this->modifiedProperties[self::COMPANY_USER_TRANSFER] = true;

        return $this;
    }

    /**
     * @module BusinessOnBehalf|CompanyUserInvitation|CompanyUser|PersistentCart|Quote
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    public function getCompanyUserTransfer()
    {
        return $this->companyUserTransfer;
    }

    /**
     * @module BusinessOnBehalf|CompanyUserInvitation|CompanyUser|PersistentCart|Quote
     *
     * @return $this
     */
    public function requireCompanyUserTransfer()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_TRANSFER);

        return $this;
    }

    /**
     * @module CompanyRole
     *
     * @param \Generated\Shared\Transfer\PermissionCollectionTransfer|null $permissions
     *
     * @return $this
     */
    public function setPermissions(PermissionCollectionTransfer $permissions = null)
    {
        $this->permissions = $permissions;
        $this->modifiedProperties[self::PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module CompanyRole
     *
     * @return \Generated\Shared\Transfer\PermissionCollectionTransfer|null
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @module CompanyRole
     *
     * @return $this
     */
    public function requirePermissions()
    {
        $this->assertPropertyIsSet(self::PERMISSIONS);

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param string|null $companyUserInvitationHash
     *
     * @return $this
     */
    public function setCompanyUserInvitationHash($companyUserInvitationHash)
    {
        $this->companyUserInvitationHash = $companyUserInvitationHash;
        $this->modifiedProperties[self::COMPANY_USER_INVITATION_HASH] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @return string|null
     */
    public function getCompanyUserInvitationHash()
    {
        return $this->companyUserInvitationHash;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @return $this
     */
    public function requireCompanyUserInvitationHash()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_INVITATION_HASH);

        return $this;
    }

    /**
     * @module CustomerGroupDiscountConnector|Customer
     *
     * @param int|null $idCustomer
     *
     * @return $this
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;
        $this->modifiedProperties[self::ID_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module CustomerGroupDiscountConnector|Customer
     *
     * @return int|null
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * @module CustomerGroupDiscountConnector|Customer
     *
     * @return $this
     */
    public function requireIdCustomer()
    {
        $this->assertPropertyIsSet(self::ID_CUSTOMER);

        return $this;
    }

    /**
     * @module CustomerUserConnector|Customer
     *
     * @param int|null $fkUser
     *
     * @return $this
     */
    public function setFkUser($fkUser)
    {
        $this->fkUser = $fkUser;
        $this->modifiedProperties[self::FK_USER] = true;

        return $this;
    }

    /**
     * @module CustomerUserConnector|Customer
     *
     * @return int|null
     */
    public function getFkUser()
    {
        return $this->fkUser;
    }

    /**
     * @module CustomerUserConnector|Customer
     *
     * @return $this
     */
    public function requireFkUser()
    {
        $this->assertPropertyIsSet(self::FK_USER);

        return $this;
    }

    /**
     * @module CustomerUserConnector|Customer
     *
     * @param string|null $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        $this->modifiedProperties[self::USERNAME] = true;

        return $this;
    }

    /**
     * @module CustomerUserConnector|Customer
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @module CustomerUserConnector|Customer
     *
     * @return $this
     */
    public function requireUsername()
    {
        $this->assertPropertyIsSet(self::USERNAME);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->modifiedProperties[self::EMAIL] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireEmail()
    {
        $this->assertPropertyIsSet(self::EMAIL);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        $this->modifiedProperties[self::FIRST_NAME] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireFirstName()
    {
        $this->assertPropertyIsSet(self::FIRST_NAME);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        $this->modifiedProperties[self::LAST_NAME] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireLastName()
    {
        $this->assertPropertyIsSet(self::LAST_NAME);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->company = $company;
        $this->modifiedProperties[self::COMPANY] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireCompany()
    {
        $this->assertPropertyIsSet(self::COMPANY);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        $this->modifiedProperties[self::GENDER] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireGender()
    {
        $this->assertPropertyIsSet(self::GENDER);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $dateOfBirth
     *
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        $this->modifiedProperties[self::DATE_OF_BIRTH] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireDateOfBirth()
    {
        $this->assertPropertyIsSet(self::DATE_OF_BIRTH);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $salutation
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
        $this->modifiedProperties[self::SALUTATION] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireSalutation()
    {
        $this->assertPropertyIsSet(self::SALUTATION);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        $this->modifiedProperties[self::PASSWORD] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requirePassword()
    {
        $this->assertPropertyIsSet(self::PASSWORD);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $newPassword
     *
     * @return $this
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        $this->modifiedProperties[self::NEW_PASSWORD] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireNewPassword()
    {
        $this->assertPropertyIsSet(self::NEW_PASSWORD);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[] $billingAddress
     *
     * @return $this
     */
    public function setBillingAddress(ArrayObject $billingAddress)
    {
        $this->billingAddress = $billingAddress;
        $this->modifiedProperties[self::BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[]|null
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @module Customer
     *
     * @param \Generated\Shared\Transfer\AddressTransfer $billingAddress
     *
     * @return $this
     */
    public function addBillingAddress(AddressTransfer $billingAddress)
    {
        $this->billingAddress[] = $billingAddress;
        $this->modifiedProperties[self::BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireBillingAddress()
    {
        $this->assertCollectionPropertyIsSet(self::BILLING_ADDRESS);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[] $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(ArrayObject $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[]|null
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @module Customer
     *
     * @param \Generated\Shared\Transfer\AddressTransfer $shippingAddress
     *
     * @return $this
     */
    public function addShippingAddress(AddressTransfer $shippingAddress)
    {
        $this->shippingAddress[] = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireShippingAddress()
    {
        $this->assertCollectionPropertyIsSet(self::SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param \Generated\Shared\Transfer\AddressesTransfer|null $addresses
     *
     * @return $this
     */
    public function setAddresses(AddressesTransfer $addresses = null)
    {
        $this->addresses = $addresses;
        $this->modifiedProperties[self::ADDRESSES] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return \Generated\Shared\Transfer\AddressesTransfer|null
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireAddresses()
    {
        $this->assertPropertyIsSet(self::ADDRESSES);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $defaultBillingAddress
     *
     * @return $this
     */
    public function setDefaultBillingAddress($defaultBillingAddress)
    {
        $this->defaultBillingAddress = $defaultBillingAddress;
        $this->modifiedProperties[self::DEFAULT_BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireDefaultBillingAddress()
    {
        $this->assertPropertyIsSet(self::DEFAULT_BILLING_ADDRESS);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $defaultShippingAddress
     *
     * @return $this
     */
    public function setDefaultShippingAddress($defaultShippingAddress)
    {
        $this->defaultShippingAddress = $defaultShippingAddress;
        $this->modifiedProperties[self::DEFAULT_SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getDefaultShippingAddress()
    {
        return $this->defaultShippingAddress;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireDefaultShippingAddress()
    {
        $this->assertPropertyIsSet(self::DEFAULT_SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        $this->modifiedProperties[self::UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireUpdatedAt()
    {
        $this->assertPropertyIsSet(self::UPDATED_AT);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $restorePasswordKey
     *
     * @return $this
     */
    public function setRestorePasswordKey($restorePasswordKey)
    {
        $this->restorePasswordKey = $restorePasswordKey;
        $this->modifiedProperties[self::RESTORE_PASSWORD_KEY] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getRestorePasswordKey()
    {
        return $this->restorePasswordKey;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireRestorePasswordKey()
    {
        $this->assertPropertyIsSet(self::RESTORE_PASSWORD_KEY);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $restorePasswordLink
     *
     * @return $this
     */
    public function setRestorePasswordLink($restorePasswordLink)
    {
        $this->restorePasswordLink = $restorePasswordLink;
        $this->modifiedProperties[self::RESTORE_PASSWORD_LINK] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getRestorePasswordLink()
    {
        return $this->restorePasswordLink;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireRestorePasswordLink()
    {
        $this->assertPropertyIsSet(self::RESTORE_PASSWORD_LINK);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $restorePasswordDate
     *
     * @return $this
     */
    public function setRestorePasswordDate($restorePasswordDate)
    {
        $this->restorePasswordDate = $restorePasswordDate;
        $this->modifiedProperties[self::RESTORE_PASSWORD_DATE] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getRestorePasswordDate()
    {
        return $this->restorePasswordDate;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireRestorePasswordDate()
    {
        $this->assertPropertyIsSet(self::RESTORE_PASSWORD_DATE);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $registrationKey
     *
     * @return $this
     */
    public function setRegistrationKey($registrationKey)
    {
        $this->registrationKey = $registrationKey;
        $this->modifiedProperties[self::REGISTRATION_KEY] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getRegistrationKey()
    {
        return $this->registrationKey;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireRegistrationKey()
    {
        $this->assertPropertyIsSet(self::REGISTRATION_KEY);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $confirmationLink
     *
     * @return $this
     */
    public function setConfirmationLink($confirmationLink)
    {
        $this->confirmationLink = $confirmationLink;
        $this->modifiedProperties[self::CONFIRMATION_LINK] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getConfirmationLink()
    {
        return $this->confirmationLink;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireConfirmationLink()
    {
        $this->assertPropertyIsSet(self::CONFIRMATION_LINK);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $registered
     *
     * @return $this
     */
    public function setRegistered($registered)
    {
        $this->registered = $registered;
        $this->modifiedProperties[self::REGISTERED] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireRegistered()
    {
        $this->assertPropertyIsSet(self::REGISTERED);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        $this->modifiedProperties[self::MESSAGE] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireMessage()
    {
        $this->assertPropertyIsSet(self::MESSAGE);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param bool|null $sendPasswordToken
     *
     * @return $this
     */
    public function setSendPasswordToken($sendPasswordToken)
    {
        $this->sendPasswordToken = $sendPasswordToken;
        $this->modifiedProperties[self::SEND_PASSWORD_TOKEN] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return bool|null
     */
    public function getSendPasswordToken()
    {
        return $this->sendPasswordToken;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireSendPasswordToken()
    {
        $this->assertPropertyIsSet(self::SEND_PASSWORD_TOKEN);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param bool|null $isGuest
     *
     * @return $this
     */
    public function setIsGuest($isGuest)
    {
        $this->isGuest = $isGuest;
        $this->modifiedProperties[self::IS_GUEST] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return bool|null
     */
    public function getIsGuest()
    {
        return $this->isGuest;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireIsGuest()
    {
        $this->assertPropertyIsSet(self::IS_GUEST);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer|null $locale
     *
     * @return $this
     */
    public function setLocale(LocaleTransfer $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $anonymizedAt
     *
     * @return $this
     */
    public function setAnonymizedAt($anonymizedAt)
    {
        $this->anonymizedAt = $anonymizedAt;
        $this->modifiedProperties[self::ANONYMIZED_AT] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getAnonymizedAt()
    {
        return $this->anonymizedAt;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireAnonymizedAt()
    {
        $this->assertPropertyIsSet(self::ANONYMIZED_AT);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        $this->modifiedProperties[self::PHONE] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requirePhone()
    {
        $this->assertPropertyIsSet(self::PHONE);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param bool|null $isDirty
     *
     * @return $this
     */
    public function setIsDirty($isDirty)
    {
        $this->isDirty = $isDirty;
        $this->modifiedProperties[self::IS_DIRTY] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return bool|null
     */
    public function getIsDirty()
    {
        return $this->isDirty;
    }

    /**
     * @module Customer
     *
     * @return $this
     */
    public function requireIsDirty()
    {
        $this->assertPropertyIsSet(self::IS_DIRTY);

        return $this;
    }
}

<?php
class TABLES {
	public static $RIDER_BILLING_CONFIG = 'tbl_rider_billing_config';
	public static $RIDER_BILLING_FIELDS = 'tbl_rider_billing_fields';
	public static $ORDER_IMAGES_RIDER = 'tbl_order_images_by_rider';
	public static $BREAKDOWN_CHARGE = 'breakdownslot';
	public static $PICKUP_CHARGE = 'pickup_slots';
	public static $COUPON = 'vendor_coupons';
	public static $TBL_COUPON = 'coupon';
	public static $DISCOUNT = 'vendor_discount';
	public static $VENDOR = 'vendor';
	public static $ADMIN_USER = 'admin_user';
	public static $ADMIN_USER_ROLE = 'admin_user_role';
	public static $CITY = 'city';
	public static $CITIES = 'cities';
	public static $STATES = 'states';
	public static $AREA = 'areas';
	public static $ZONE = 'zone';
	public static $CUISINE = 'cuisine';
	public static $CONTACT = 'contact';
	public static $RESTAURANT = 'vendor';
	public static $RESTAURANT_SERVICE = 'vendor_service';
	public static $RESTAURANT_CONTACTS = 'restaurant_contacts';
	public static $RESTAURANT_PROPERTY = 'vendor_properties';
	public static $RESTAURANT_BILLING_CONFIG = 'vendor_billing_config';
	public static $RESTAURANT_BILLING_FIELDS = 'vendor_billing_fields';
	public static $RESTAURANT_CUISINES = 'restaurant_cuisines';
	public static $RESTAURANT_MOV = 'restaurant_delivery_radius_mov';
	public static $RESTAURANT_SLABS = 'restaurant_delivery_radius_slabs';
	public static $RESTAURANT_DEL_TIME = 'restaurant_delivery_radius_time';
	public static $RESTAURANT_GEOFENCE = 'restaurant_geofence';
	public static $RESTAURANT_CONFIG = 'restaurant_config';
	public static $MENU_STORAGE = 'menu_storage';
	public static $MENU_MAIN_CATEGORY = 'category';
	public static $MENU_MAIN_SUBCATEGORY = 'subcategory';
	public static $CATEGORY_SUBCATEGORY = 'category_subcat';
	public static $VENDOR_CATEGORY = 'vendor_category';
	public static $VENDOR_SUBCATEGORY = 'vendor_subcategory';
	public static $STATUS = 'status';
//	public static $MENU_CATEGORY = 'category';
	//public static $SERVICE = 'service';
	public static $SERVICE = 'tbl_vendor_services';
	//public static $SPARE = 'spare';
	public static $SPARE = 'tbl_vendor_spares';
	public static $MENU_ITEM = 'menu_restaurant_items';
	public static $MENU_ITEM_PRICE = 'menu_restaurant_item_prices';
	public static $MENU_OPTION_CATEGORY = 'menu_item_option_categories';
	public static $MENU_OPTION = 'menu_item_options';
	public static $MENU_OPTION_PRICE = 'menu_item_options_price';
	public static $ORDER_CART = 'order_cart';
	public static $ORDER_SUB_CART = 'order_sub_cart';
	public static $EFFECTIVE_SERVICE_TAX = 'effective_service_tax';
	public static $RESTAURANT_COMMISSION = 'restaurant_commission';
	public static $RESTAURANT_BILLING_ITEM = 'restaurant_billing_item';
	public static $BILLING_HEAD_CATEGORY = 'billing_head_category';
	public static $BILLING_HEAD_SUB_CATEGORY = 'billing_head_sub_category';
	public static $ORDER = 'tbl_booking';
	public static $ORDER_CUSTOMER = 'order_customer';
	public static $ORDER_ITEM = 'order_items';
	public static $ORDER_SERVICE = 'tbl_booking_services';
	public static $ORDER_SUB_ITEM = 'order_subitems';
	public static $ONLINE_PAYMENT = 'online_payments';
	public static $USERS = 'users';
	public static $USER = 'tbl_users';
	public static $USER_ADDRESS = 'user_address';
	public static $USERADDRESS = 'user_address';
	public static $WALLET = 'user_wallet';
	public static $WALLET_TRANSACTION = 'user_wallet_transaction';
	public static $ORDER_LOGS = 'tbl_booking_logs';
	public static $RESTAURANT_TIMINGS = 'restaurant_timing';
	public static $INVITE = 'invite';
	public static $BRAND = 'brand';
	public static $CANCEL_REASON = 'cancel_reason';
	public static $ORDER_CANCEL_REASON = 'tbl_order_cancel_reason';
	public static $ORDER_BILLING = 'restaurant_order_billing';
	public static $INVOICE_STATUS = 'restaurant_invoice_status';
	public static $BILLING_INVOICES = 'billing_invoices';
	public static $SUBSCRIBE = 'newsletter_subscriber';
	public static $CLIENT_USER = 'client_user';
	public static $CLIENT_ORDER = 'client_orders';
	public static $CLIENT_RESTAURANTS = 'client_restaurants';
	public static $BANNER = 'banner';
	public static $PROMOTED_BANNER = 'promoted_banner';
	public static $INVOICE_EMAIL_SEND = 'invoice_email';
	public static $OFFER = 'offer';
	public static $SUBSCRIPTION_BILLING = 'restaurant_other_billing';
	public static $RESTAURANT_OFFER = 'restaurant_offers';
	public static $BANNER_AD_TRACKING = 'banner_ad_tracking';
	public static $CONTACT_US = 'contactus';
	public static $FEEDBACK = 'feedback';
	public static $JOB = 'job';
	public static $CONDIDATE = 'condidate';
	public static $AD_TRACKING ='banner_ad_tracking';
	public static $GEOFANCY = 'restaurant_geofences';
	public static $RESTAURANT_LOG='restaurant_logs';
	public static $OFFER_LOG='offer_log';
	public static $PROMOTED_RESTAURANT = 'promoted_restaurant';
	public static $RESTAURANT_RATING = 'restaurant_rating';
	public static $RESTAURANT_REVIEW = 'restaurant_review';
	public static $TICKET = 'ticket';
	public static $TICKET_COMMENT = 'ticket_comment';
	public static $MANUFACTURE = 'manufacturer';
	public static $ATTRIBUTE_GROUP= 'attribute_group';
	public static $ATTRIBUTE= 'attribute';
	public static $PRODUCT= 'product';
	public static $PRODUCT_ATTRIBUTE= 'product_attribute';
	public static $PRODUCT_CATEGORY= 'product_category';
	public static $PRODUCT_IMAGE= 'product_image';
	public static $PRODUCT_CUSTOM_MAIN= 'product_custom_main';
	public static $PRODUCT_CUSTOM_VALUE= 'custom_option_value';
	public static $INVOICE= 'tbl_booking_invoice';
	public static $USER_PETS= 'user_pets';
	public static $VISITING_SLOT= 'visiting_slot';
	public static $DELIVERY_SLOT= 'delivery_slot';
	public static $PARAMETER= 'parameter';
	public static $GRADE= 'grade';
	public static $GRADEPARA= 'gradepara';
	public static $EMPLOYEE= 'employee';
	public static $EMPLOYEE_DOC= 'employee_document';
	public static $ROLE= 'role';
	public static $FORM_ACCESS= 'form_access';
	public static $SUBFORM_ACCESS= 'subform_access';
	public static $FORM_ASSIGN= 'form_assign';
	public static $PICKUP_SLOTS = 'tbl_pickup_slots';
	public static $FIELD_EXECUTIVE = 'tbl_field_executive';
	public static $PAYMENT_DETAIL = 'tbl_payment_details';
	public static $RIDE_PAYMENT_DETAIL = 'tbl_ride_payment_details';
	public static $MAIN_STATUS = 'main_status';
	public static $RIDER_NOTIFICATION = 'tbl_rider_notification';
	public static $USER_NOTIFICATION = 'tbl_user_notification';
	public static $PROFILEUPDATE = 'tbl_profileupdate';
	public static $STATIC_SUBCATEGORY = 'static_subcategory';
	public static $ORDER_COMMENT = 'tbl_booking_comment';
	public static $REASON = 'tbl_reason';
	public static $USERREMINDER = 'tbl_user_remind_order';
	public static $ACCESS_CONTROL	= 'tbl_access_control';	

	public static $CLIENT = 'tbl_client'; 
	public static $CLIENT_BOOKING = 'tbl_client_booking';
	public static $CLIENT_BILLING_CONFIG = 'tbl_client_billing_config';
	public static $CLIENT_BILLING_FIELD = 'tbl_client_billing_fields'; 
	public static $CLIENT_SERVICES = 'tbl_client_booking_services'; 
	public static $CLIENT_DOC = 'tbl_client_doc'; 
	public static $CLIENT_BOOKING_LOGS = 'tbl_client_booking_logs';

	public static $B2B_ADMIN_USER = 'tbl_B2B_admin';

	public static $OUTLET = 'tbl_outlets';
	public static $BIKE = 'tbl_bikes'; 
        public static $RATECARD_PRICE = 'tbl_ratecard_price';

	public static $CLIENT_USER_ROLE = 'tbl_client_role';  
	public static $CLIENT_FORM_ACCESS = 'tbl_client_module'; 
	public static $CLIENT_ACCESS_CONTROL = 'tbl_client_access_control'; 

	public static $CLIENT_EMPLOYEE= 'client_employee';
	public static $CLIENT_EMPLOYEE_DOC= 'client_employee_document';
	public static $NOTIFICATION = 'notification';
    public static $Package = 'packages';
    public static $PackageModels   = 'package_models';
	public static $PackageServices = 'package_services';
    public static $USER_VEHICLES = 'tbl_user_vehicles';
    
     public static $ClientPackage = 'b2b_packages';
    public static $ClientPackageModels   = 'b2b_package_models';
	public static $ClientPackageServices = 'b2b_package_services';
	
	public static $USER_PACKAGES = 'tbl_user_package';

	public static $USER_VEHICLES_DOCUMENTS = 'tbl_user_vehicles_documents';
	public static $VEHICLES_DOCUMENTS = 'vehicles_documents';
	
	public static $SERVICE_GROUP = 'tbl_static_service_group';

	public static $RIDER = 'tbl_rider';
	public static $RIDERPAYMENT = 'rider_payment';




}

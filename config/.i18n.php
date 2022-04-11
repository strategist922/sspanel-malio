<?php

## Admin Settings 站長設置 ##
$I18N['appName'] = array(
	'en' => 'cafecat',
	'zh-cn' => '咖啡貓'
);
$I18N['class-plan-name-map'] = array(  // 用戶等級 => 等級名字
	'en' => array(
		1 => 'Basic',
		2 => 'Plus',
		3 => 'Pro'
	),
	'zh-cn' => array(
		1 => '基礎版',
		2 => '高級版',
		3 => '專業版',
		4 => '專業版'
	),
);
$I18N['node-class-name-map'] = array(  // 節點等級 => 節點列表等級標題
	'en' => array(
		1 => 'Basic Servers',
		2 => 'Plus Servers',
		3 => 'Pro Servers',
		4 => 'no'
	),
	'zh-cn' => array(
		0 => '免費試用節點',
		1 => '基礎版節點',
		2 => '高級版節點',
		3 => '專業版節點',
		10 => '流量用盡節點'
	),
);
$I18N['trial_plan'] = array(
	'en' => array(
		'name' => 'Trail',
		'price' => 'Free',
		'currency' => '',
		'billing' => 'one time',
		'features' => [
			array(
				'support' => true,
				'name' => '5GB Data'
			),
			array(
				'support' => true,
				'name' => '1 Devices'
			),
			array(
				'support' => false,
				'name' => 'Ticket Support'
			),
			array(
				'support' => true,
				'name' => 'Standard Servers'
			),
			array(
				'support' => false,
				'name' => 'Relay Servers'
			),
			array(
				'support' => false,
				'name' => 'IPLC Servers'
			),
		]
	
	),
	'zh-cn' => array(
		'name' => '新用戶試用',
		'price' => '免費',
		'currency' => '',
		'billing' => '壹次性',
		'features' => [
			array(
				'support' => true,
				'name' => '5GB 使用流量'
			),
			array(
				'support' => true,
				'name' => '1個 在線客戶端'
			),
			array(
				'support' => false,
				'name' => '工單技術支持'
			),
			array(
				'support' => true,
				'name' => '國際標準節點'
			),
			array(
				'support' => false,
				'name' => '國內中轉節點'
			),
			array(
				'support' => false,
				'name' => 'IPLC專線節點'
			),
		]
	),
);
$I18N['plans-info'] = array(   // 會員計劃的信息， 可以復制array增加會員計劃，比如增加第四個會員計劃，使用 'plan_4' => array(...) 這樣的格式
	'en' => [
		'plan_1' => array(
			'name' => 'Basic',
			'price' => '1.9',
			'currency' => '$',
			'billing' => 'per month',
			'features' => [
				array(
					'support' => true,
					'name' => '500GB Data'
				),
				array(
					'support' => true,
					'name' => '3 Devices'
				),
				array(
					'support' => true,
					'name' => 'Ticket Support'
				),
				array(
					'support' => true,
					'name' => 'Standard Servers'
				),
				array(
					'support' => false,
					'name' => 'Relay Servers'
				),
				array(
					'support' => false,
					'name' => 'IPLC Servers'
				),
			]
		),
		'plan_2' => array(
			'name' => 'Plus',
			'price' => '3.9',
			'currency' => '$',
			'billing' => 'per month',
			'features' => [
				array(
					'support' => true,
					'name' => '1000GB Data'
				),
				array(
					'support' => true,
					'name' => '6 Devices'
				),
				array(
					'support' => true,
					'name' => 'LiveChat Support'
				),
				array(
					'support' => true,
					'name' => 'Standard Servers'
				),
				array(
					'support' => true,
					'name' => 'Relay Servers'
				),
				array(
					'support' => false,
					'name' => 'IPLC Servers'
				),
			]
		),
		'plan_3' => array(
			'name' => 'Pro',
			'price' => '6.9',
			'currency' => '$',
			'billing' => 'per month',
			'features' => [
				array(
					'support' => true,
					'name' => '2000GB Data'
				),
				array(
					'support' => true,
					'name' => '10 Devices'
				),
				array(
					'support' => true,
					'name' => 'LiveChat Support'
				),
				array(
					'support' => true,
					'name' => 'Standard Servers'
				),
				array(
					'support' => true,
					'name' => 'Relay Servers'
				),
				array(
					'support' => true,
					'name' => 'IPLC Servers'
				),
			]
		)
	],
	'zh-cn' => [
		'plan_1' => array(
			'name' => '標準版',
			'price' => '9.9',
			'currency' => '¥',
			'billing' => '每月',
			'features' => [
				array(
					'support' => true,
					'name' => '50GB 使用流量'
				),
				array(
					'support' => true,
					'name' => '2個 在線客戶端'
				),
				array(
					'support' => true,
					'name' => '工單技術支持'
				),
				array(
					'support' => true,
					'name' => '國際標準節點'
				),
				array(
					'support' => false,
					'name' => '國內中轉節點'
				),
				array(
					'support' => false,
					'name' => 'IPLC專線節點'
				),
			]
		),
		'plan_2' => array(
			'name' => '高級版',
			'price' => '19.9',
			'currency' => '¥',
			'billing' => '每月',
			'features' => [
				array(
					'support' => true,
					'name' => '100GB 使用流量'
				),
				array(
					'support' => true,
					'name' => '4個 在線客戶端'
				),
				array(
					'support' => true,
					'name' => '24/7 在線技術支持'
				),
				array(
					'support' => true,
					'name' => '國際標準節點'
				),
				array(
					'support' => true,
					'name' => '國內中轉節點'
				),
				array(
					'support' => false,
					'name' => 'IPLC專線節點'
				),
			]
		),
		'plan_3' => array(
			'name' => '加強版',
			'price' => '29.9',
			'currency' => '¥',
			'billing' => '每月',
			'features' => [
				array(
					'support' => true,
					'name' => '300GB 使用流量'
				),
				array(
					'support' => true,
					'name' => '8個 在線客戶端'
				),
				array(
					'support' => true,
					'name' => '24/7 在線技術支持'
				),
				array(
					'support' => true,
					'name' => '國際標準節點'
				),
				array(
					'support' => true,
					'name' => '國內中轉節點'
				),
				array(
					'support' => true,
					'name' => 'IPLC專線節點'
				),
			
			]
		),
		'plan_4' => array(
			'name' => '加強版',
			'price' => '29.9',
			'currency' => '¥',
			'billing' => '每月',
			'features' => [
				array(
					'support' => true,
					'name' => '300GB 使用流量'
				),
				array(
					'support' => true,
					'name' => '8個 在線客戶端'
				),
				array(
					'support' => true,
					'name' => '24/7 在線技術支持'
				),
				array(
					'support' => true,
					'name' => '國際標準節點'
				),
				array(
					'support' => true,
					'name' => '國內中轉節點'
				),
				array(
					'support' => true,
					'name' => 'IPLC專線節點'
				),
			
			]
		),
	
	]
);

## General 通用 ##
$I18N['email'] = array(
	'en' => 'Email',
	'zh-cn' => '郵箱'
);
$I18N['password'] = array(
	'en' => 'Password',
	'zh-cn' => '密碼'
);
$I18N['or'] = array(
	'en' => 'OR',
	'zh-cn' => '或'
);
$I18N['next'] = array(
	'en' => 'Next',
	'zh-cn' => '下壹步'
);
$I18N['enable'] = array(
	'en' => 'Enable',
	'zh-cn' => '開啟'
);
$I18N['confirm'] = array(
	'en' => 'Confirm',
	'zh-cn' => '確定'
);
$I18N['confirm-buy'] = array(
	'en' => 'Confirm buy',
	'zh-cn' => '確定購買'
);
$I18N['cancel'] = array(
	'en' => 'Cancel',
	'zh-cn' => '取消'
);
$I18N['action'] = array(
	'en' => 'Action',
	'zh-cn' => '操作'
);
$I18N['logout'] = array(
	'en' => 'Logout',
	'zh-cn' => '退出登錄'
);
$I18N['join-telegram-group'] = array(
	'en' => 'Join Telegram Group',
	'zh-cn' => '加入 Telegram 群組'
);
$I18N['bind-telegram-id'] = array(
	'en' => 'Go to bind',
	'zh-cn' => '前往綁定'
);
$I18N['access-faqs'] = array(
	'en' => 'access faq',
	'zh-cn' => '查看常見問題'
);
$I18N['alipay'] = array(
	'en' => 'Alipay',
	'zh-cn' => '支付寶'
);
$I18N['alipay_1'] = array(
	'en' => 'Alipay',
	'zh-cn' => '支付寶_1'
);
$I18N['alipay_2'] = array(
	'en' => 'Alipay',
	'zh-cn' => '支付寶_2'
);
$I18N['wechat-pay'] = array(
	'en' => 'Wechat Pay',
	'zh-cn' => '微信支付'
);
$I18N['wechat-pay_1'] = array(
	'en' => 'Wechat Pay',
	'zh-cn' => '微信支付_1'
);
$I18N['wechat-pay_2'] = array(
	'en' => 'Wechat Pay',
	'zh-cn' => '微信支付_2'
);
$I18N['cryptocurrency'] = array(
	'en' => 'Cryptocurrency',
	'zh-cn' => '加密貨幣'
);
$I18N['qq-wallet'] = array(
	'en' => 'QQ Wallet',
	'zh-cn' => 'QQ錢包'
);
$I18N['unionpay'] = array(
	'en' => 'UnionPay',
	'zh-cn' => '銀聯支付'
);
$I18N['my'] = array(
	'en' => 'My',
	'zh-cn' => '我的'
);
$I18N['usage'] = array(
	'en' => 'Usage',
	'zh-cn' => '使用'
);
$I18N['copied'] = array(
	'en' => 'Copied',
	'zh-cn' => '已復制'
);

## Landing Page 著陸頁 ##
$I18N['features'] = array(
	'en' => 'Features',
	'zh-cn' => '特性'
);
$I18N['pricing'] = array(
	'en' => 'Pricing',
	'zh-cn' => '價格'
);
$I18N['support'] = array(
	'en' => 'Support',
	'zh-cn' => '支持'
);
$I18N['index-dashboard-button'] = array(
	'en' => 'Dashboard',
	'zh-cn' => '用戶中心'
);
$I18N['index-slogan'] = array(
	'en' => 'We Dedicate to Providing the Finest Network Proxy Service',
	'zh-cn' => '全球網絡中繼服務，隨時隨處盡情使用'
);
$I18N['index-text-under-slogan'] = array(
	'en' => 'The ultimate proxy for all of your devices',
	'zh-cn' => '通過我們的網絡訪問內容提供商、公司網絡和公共雲服務'
);
$I18N['get-started'] = array(
	'en' => 'Get Started',
	'zh-cn' => '開始使用'
);
$I18N['index-offer-bar'] = array(
	'en' => '***',
	'zh-cn' => '常駐95折優惠：5off'
);
$I18N['not-a-reason-to-use'] = array(
	'en' => 'Not a reason to use',
	'zh-cn' => '為什麽選擇 ' . $I18N['appName']['zh-cn']
);
$I18N['just-a-statistic'] = array(
	'en' => '<span class="font-weight-500">just a</span> statistic',
	'zh-cn' => '迄今為止
    '
);
$I18N['index-servers'] = array(
	'en' => 'Servers',
	'zh-cn' => '國際節點'
);
$I18N['regions'] = array(
	'en' => 'Regions',
	'zh-cn' => '國家地區'
);
$I18N['users'] = array(
	'en' => 'Users',
	'zh-cn' => '滿意用戶'
);
$I18N['index-section-1-title'] = array(
	'en' => 'The service <span class="text-primary">you have been looking for</span> is here',
	'zh-cn' => '為妳 <span class="text-primary">量身定制<span> 的服務'
);
$I18N['index-section-1-subtitle'] = array(
	'en' => 'The finest proxy service built for you with the most reliable technology',
	'zh-cn' => '可靠的基礎設施，並能提供您喜愛的諸多功能'
);
$I18N['index-section-1-feature-1-lead'] = array(
	'en' => 'Fast & Reliable Connection',
	'zh-cn' => '高速穩定'
);
$I18N['index-section-1-feature-1-desc'] = array(
	'en' => 'Make you never feel a thing of the existance of the GFW again',
	'zh-cn' => '體驗宛若身在海外的訪問速度'
);
$I18N['index-section-1-feature-2-lead'] = array(
	'en' => 'Easy Configuration',
	'zh-cn' => '便攜設置'
);
$I18N['index-section-1-feature-2-desc'] = array(
	'en' => 'Our products are compatible with macOS, iOS, Android, Windows, and Linux',
	'zh-cn' => '我們的服務適用於 macOS、iOS、Android、Windows 和 Linux'
);
$I18N['index-section-1-feature-3-lead'] = array(
	'en' => 'Cheap but Trustworthy',
	'zh-cn' => '節省成本'
);
$I18N['index-section-1-feature-3-desc'] = array(
	'en' => 'Save you money from building your own service',
	'zh-cn' => '相比自托管服務可節省大量費用'
);
$I18N['index-section-1-feature-4-lead'] = array(
	'en' => 'Global Proxy',
	'zh-cn' => '全球互聯'
);
$I18N['index-section-1-feature-4-desc'] = array(
	'en' => 'Use IXP to connect to any service provider around the world',
	'zh-cn' => '通過 IXP 連接至全球內容提供商，更加快速'
);
$I18N['index-section-1-feature-5-lead'] = array(
	'en' => 'Carrier Friendly',
	'zh-cn' => '運營商友好'
);
$I18N['index-section-1-feature-5-desc'] = array(
	'en' => 'We made easy for any internet service subscriber to use our service',
	'zh-cn' => '我們的產品和您的當地運營商兼容，適用於您的固網與移動網絡'
);
$I18N['index-section-1-feature-6-lead'] = array(
	'en' => 'Third-Party Compatibility',
	'zh-cn' => '多應用兼容'
);
$I18N['index-section-1-feature-6-desc'] = array(
	'en' => 'We provide compatible third-party apps to extend our potential',
	'zh-cn' => '提供全面且可靠的第三方應用程序兼容'
);
$I18N['index-section-2-above-title'] = array(
	'en' => 'CROSS DEVICES & PLATFORMS',
	'zh-cn' => 'CROSS DEVICES & PLATFORMS'
);
$I18N['index-section-2-title'] = array(
	'en' => 'Use Our Service on Your Favorite Devices, Either Your Laptop or Your Phone. Enjoy Our Service at Any Place',
	'zh-cn' => '在妳心愛的電子設備中使用，無論是移動的手機還是固定的電腦，隨時隨處可用'
);
$I18N['index-section-2-desc'] = array(
	'en' => $I18N['appName']['en'] . ' provides services compatible on macOS, iOS, Android, Windows, and Linux. Using third-party apps, you may use our service on your phone, computer, router, game console, and even TV boxes.',
	'zh-cn' => $I18N['appName']['zh-cn'] . '的服務適用於 macOS、iOS、Android、Windows 和 Linux，借助第三方客戶端，可在手機、電腦、路由器、遊戲機、電視盒子中使用。'
);
$I18N['index-section-3-above-title'] = array(
	'en' => 'UNBLOCK STREAMING MEDIA',
	'zh-cn' => 'UNBLOCK STREAMING MEDIA'
);
$I18N['index-section-3-title'] = array(
	'en' => 'Stream Your Favorite TV Shows and Music',
	'zh-cn' => '解鎖流媒體，觀賞和聆聽優質的內容'
);
$I18N['index-section-3-desc'] = array(
	'en' => 'Using service provided by ' . $I18N['appName']['en'] . ', you may unblock media streaming services like Netflix, Hulu, HBO, TVB, Happyon, and AbemaTV, and listen to streaming music provided by services like Spotify and Pandora',
	'zh-cn' => '通過 ' . $I18N['appName']['zh-cn'] . ' 的服務，可以觀看包括 Netflix、Hulu、HBO、TVB、Happyon、AbemaTV 等在內的多種流媒體視頻，聆聽包括 Spotify、Pandora 等在內的流媒體音樂。'
);
$I18N['index-section-4-title'] = array(
	'en' => 'Even More Built-in Features',
	'zh-cn' => '不僅僅如此，亦包含以下諸多特性'
);
$I18N['index-section-4-desc'] = array(
	'en' => '* Some features will require the use of a third-party app',
	'zh-cn' => '* 部分特性需要配合第三方客戶端與托管規則使用'
);
$I18N['index-section-5-title'] = array(
	'en' => 'Execllent Service with Affordable Prices',
	'zh-cn' => '出色的體驗，意想不到的價格'
);
$I18N['index-section-5-desc'] = array(
	'en' => 'Never waste your time on waiting again, start enjoy our proxy service.',
	'zh-cn' => '不要把寶貴的時間，浪費在等待上。即刻開啟全球網絡中繼服務，在任何時間任何地點訪問全球互聯網。'
);
$I18N['index-section-6-title'] = array(
	'en' => 'Start Using Our Global Proxy Service',
	'zh-cn' => '開始使用優秀的全球網絡中繼服務'
);
$I18N['index-section-6-subtitle'] = array(
	'en' => 'Start using outstanding global network relay service',
	'zh-cn' => 'Start using outstanding global network relay service'
);
$I18N['index-section-6-card-1-title'] = array(
	'en' => 'Pre-sales',
	'zh-cn' => '售前咨詢'
);
$I18N['index-section-6-card-1-desc'] = array(
	'en' => 'Any questions on our service? Contact our Sales Team now.',
	'zh-cn' => '有任何關於會員計劃的疑問？聯系我們的售前咨詢小組，馬上為您解答。'
);
$I18N['index-section-6-card-2-title'] = array(
	'en' => 'Tech Support',
	'zh-cn' => '技術支持'
);
$I18N['index-section-6-card-2-desc'] = array(
	'en' => $I18N['appName']['en'] . ' provides certain tech support during your subscription.',
	'zh-cn' => $I18N['appName']['zh-cn'] . ' 在您的訂閱周期內為您提供壹定程度上的技術支持。'
);
$I18N['start-now'] = array(
	'en' => 'Start Now',
	'zh-cn' => '立即註冊'
);
$I18N['contact-us'] = array(
	'en' => 'Contact Us',
	'zh-cn' => '聯系我們'
);
$I18N['subscribe'] = array(
	'en' => 'Subscribe',
	'zh-cn' => '訂閱'
);
$I18N['index-footer-slogan'] = array(
	'en' => 'We dedicate to providing the finest network proxy service',
	'zh-cn' => '致力於為用戶提供高速穩定的高性價比網絡中繼服務'
);
$I18N['index-more-features'] = array(
	'en' => array(
		array(
			'icon' => 'fas fa-ad',
			'feature' => 'Block Ads when viewing webpages and streaming videos',
		),
		array(
			'icon' => 'fas fa-filter',
			'feature' => 'Smart Router, automatically choose the proxy for various requests',
		),
		array(
			'icon' => 'fab fa-apple',
			'feature' => 'Apple Service Proxied (App Store, Apple Music, iCloud, and iTunes etc.)',
		),
		array(
			'icon' => 'fas fa-tachometer-alt',
			'feature' => 'Unblock Websites (Google/Youtube/Twitter/Instagram/Github etc.)',
		),
		array(
			'icon' => 'fas fa-lock',
			'feature' => 'Encrypt all your connections to protect your privacy',
		),
		array(
			'icon' => 'fas fa-fire',
			'feature' => 'Compatible with awesome third-party apps developed on many system platforms',
		),
	),
	'zh-cn' => array(
		array(
			'icon' => 'fas fa-ad',
			'feature' => '過濾常用網站廣告、常用視頻廣告、其他流媒體網站廣告',
		),
		array(
			'icon' => 'fas fa-filter',
			'feature' => '智能分流系統，所有國內網站直線連接，增強用戶體驗',
		),
		array(
			'icon' => 'fab fa-apple',
			'feature' => 'Apple服務加速 (App Store、Apple Music、iCloud、iTunes等)',
		),
		array(
			'icon' => 'fas fa-tachometer-alt',
			'feature' => '國外常用網站加速 (Google/Youtube/Twitter/Instgram/Github等)',
		),
		array(
			'icon' => 'fas fa-lock',
			'feature' => '在傳輸過程中使用最強的加密方式，保護用戶數據和隱私',
		),
		array(
			'icon' => 'fas fa-fire',
			'feature' => '與諸多平臺上的優秀應用程序兼容，這些應用程序由許多創新公司和開發人員開發',
		),
	)
);
$I18N['index-user-reviews'] = array(
	'en' => [
		array(
			'user' => 'xxx',
			'position' => '<a href="/">xxxx</a> xxx',
			'review' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'
		),
		array(
			'user' => 'CXK',
			'position' => '<a href="/">xxxx</a>xxxxxx',
			'review' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'
		),
		array(
			'user' => 'xxx',
			'position' => 'xxxx',
			'review' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx🐈🐶'
		),
	],
	'zh-cn' => [
		array(
			'user' => '某壹沙雕網友',
			'position' => '學生',
			'review' => '查閱資料真的好用，網速很快，觀看NF等也很方便，好用到飛起'
		),
		array(
			'user' => '蔡某',
			'position' => '個人練習生',
			'review' => '大家好，我是練習時長兩年半的個人練習生，喜歡唱、跳、rap、籃球'
		),
		array(
			'user' => '羅誌祥',
			'position' => '時間刺客',
			'review' => '時間不在於妳擁有多少，而在於妳怎樣使用'
		),
	
	],
);

## Login 登錄 ##
$I18N['login'] = array(
	'en' => 'Login',
	'zh-cn' => '登錄'
);
$I18N['forgot-password-question-mark'] = array(
	'en' => 'Forgot Password?',
	'zh-cn' => '忘記密碼？'
);
$I18N['remember-me'] = array(
	'en' => 'Remember Me',
	'zh-cn' => '記住我'
);
$I18N['login-with-telegram'] = array(
	'en' => 'Login with Telegram',
	'zh-cn' => '使用 Telegram 登錄'
);
$I18N['dont-have-an-account-question-mark'] = array(
	'en' => 'Don&apos;t have an account? <a href="/auth/register">Create One 👉</a>',
	'zh-cn' => '還沒有賬號？<a href="/auth/register">馬上註冊 👉</a>'
);
$I18N['login_welcome'] = array(
	'en' => 'Welcome to <span class="font-weight-bold">' . $I18N['appName']['en'] . '</span>',
	'zh-cn' => '歡迎使用 <span class="font-weight-bold">' . $I18N['appName']['zh-cn'] . '</span>'
);
$I18N['login_slogan'] = array(
	'en' => 'We Dedicate to Providing the Finest Network Proxy Service',
	'zh-cn' => '這是壹句好聽順嘴而且不長不短剛剛好的Slogan<br>甚至可以寫第二行'
);
$I18N['please-fill-in-your-email'] = array(
	'en' => 'Please fill in your email',
	'zh-cn' => '請填寫郵箱'
);
$I18N['please-fill-in-your-password'] = array(
	'en' => 'Please fill in your password',
	'zh-cn' => '請填寫密碼'
);

## Sign Up 註冊 ##
$I18N['sign-up'] = array(
	'en' => 'Sign Up',
	'zh-cn' => '註冊'
);
$I18N['closed-on-registeration'] = array(
	'en' => '$1 已停止新用戶註冊',
	'zh-cn' => '$1 has closed on registeration'
);
$I18N['nickname'] = array(
	'en' => 'Nickname',
	'zh-cn' => '昵稱'
);
$I18N['no_nickname'] = array(
	'en' => 'If you do not fill in, use email as a nickname',
	'zh-cn' => '不填寫時用email前缀做昵稱'
);
$I18N['please-fill-in-your-nickname'] = array(
	'en' => 'Please fill in your nickname',
	'zh-cn' => '請填寫昵稱'
);
$I18N['please-fill-in-your-passsword'] = array(
	'en' => 'Please fill in your passsword',
	'zh-cn' => '請填寫密碼'
);
$I18N['please-fill-in-invitation-code'] = array(
	'en' => 'Please fill in invitation code',
	'zh-cn' => '請填寫邀請碼'
);
$I18N['confirm-password'] = array(
	'en' => 'Confirm Password',
	'zh-cn' => '確認密碼'
);
$I18N['please-your-confirm-password'] = array(
	'en' => 'Please confirm your password',
	'zh-cn' => '請再次填寫密碼'
);
$I18N['invitation-code'] = array(
	'en' => 'Invitation Code',
	'zh-cn' => '邀請碼'
);
$I18N['optional'] = array(
	'en' => 'Optional',
	'zh-cn' => '選填'
);
$I18N['email-verification-code'] = array(
	'en' => 'Email Verification Code',
	'zh-cn' => '郵箱驗證碼'
);
$I18N['please-fill-in-email-verification-code'] = array(
	'en' => 'Please fill in email verification code',
	'zh-cn' => '請填寫郵箱驗證碼'
);
$I18N['send'] = array(
	'en' => 'Send',
	'zh-cn' => '發送'
);
$I18N['phone-number'] = array(
	'en' => 'Phone Number',
	'zh-cn' => '手機號'
);
$I18N['please-fill-in-your-phone-number'] = array(
	'en' => 'Please fill in your phone number',
	'zh-cn' => '請填寫手機號'
);
$I18N['sms-verification-code'] = array(
	'en' => 'SMS Verification Code',
	'zh-cn' => '短信驗證碼'
);
$I18N['please-fill-in-sms-verification-code'] = array(
	'en' => 'Please fill in sms verification code',
	'zh-cn' => '請填寫短信驗證碼'
);
$I18N['sign-up-tos-check'] = array(
	'en' => 'By signing up, you automatically agree to our <a href="/tos" target="blank">Term of Service</a>',
	'zh-cn' => '註冊即代表同意 <a href="/tos" target="blank">服務條款</a>'
);
$I18N['check-tos-feedback'] = array(
	'en' => 'Please read the Term of Service then check the checkbox',
	'zh-cn' => '請閱讀服務條款並勾選'
);
$I18N['already-got-an-account-question-mark'] = array(
	'en' => 'Already got an account? <a href="/auth/login">Login Now 👉</a>',
	'zh-cn' => '已經有賬號了？<a href="/auth/login">馬上登錄 👉</a>'
);
$I18N['too-weak'] = array(
	'en' => 'Too weak',
	'zh-cn' => '超級弱雞'
);
$I18N['weak'] = array(
	'en' => 'Weak',
	'zh-cn' => '弱雞'
);
$I18N['average'] = array(
	'en' => 'Average',
	'zh-cn' => '壹般般'
);
$I18N['strong'] = array(
	'en' => 'Strong',
	'zh-cn' => '有點強'
);
$I18N['perfect'] = array(
	'en' => 'Perfect😆',
	'zh-cn' => '很強👌'
);
$I18N['sign-up-successful'] = array(
	'en' => 'New account created',
	'zh-cn' => '註冊成功'
);
$I18N['hey'] = array(
	'en' => 'Hey',
	'zh-cn' => '提示'
);
$I18N['send-again'] = array(
	'en' => 'Send again',
	'zh-cn' => '再次發送'
);
$I18N['code-sent'] = array(
	'en' => 'Code sent',
	'zh-cn' => '已發送驗證碼'
);
$I18N['email-code-desc'] = array(
	'en' => 'If not received, check your Spam Inbox',
	'zh-cn' => '如長時間未收到，請查看郵件垃圾箱'
);
$I18N['hey'] = array(
	'en' => 'Hey',
	'zh-cn' => '提示'
);

## Dashboard 首頁 ##
$I18N['dashboard'] = array(
	'en' => 'Dashboard',
	'zh-cn' => '用戶中心'
);
$I18N['daily-bonus'] = array(
	'en' => 'Daily Bonus',
	'zh-cn' => '每日簽到'
);
$I18N['alredy-got-daily-bonus'] = array(
	'en' => 'Come back tomorrow',
	'zh-cn' => '明日再來'
);
$I18N['no-available-data-alert'] = array(
	'en' => 'You have used up all the data, and your service is currently suspended. Purchase data add-on in the store to resume your service.',
	'zh-cn' => '您的流量已用盡，無法繼續使用本站服務。如需繼續使用，請前往會員商店訂閱。'
);
$I18N['plan-expired-alert'] = array(
	'en' => 'Your plan has expired, please renew your plan in time.',
	'zh-cn' => '您的會員計劃已過期，請及時續費。'
);
$I18N['no-enough-data-alert'] = array(
	'en' => 'You have less than 5GB data left, you can purchase Data Add-on in the store if you need more data.',
	'zh-cn' => '您的可用流量不足5GB，如需更多流量，可前往會員商店購買流量疊加包。'
);
$I18N['new-user-guide-alert'] = array(
	'en' => 'Don&apos;t know how to start？<b>Download</b> and use our apps with just few steps!',
	'zh-cn' => '新手上路？<b>點我下載客戶端</b>，輕松上手！'
);
$I18N['code-off-guide-alert'] = array(
	'en' => '',
	'zh-cn' => '暫無優惠活動'
);
$I18N['node-guide-alert'] = array(
	'en' => '',
	'zh-cn' => '“原生”節點可提供更優質的網路鏈接'
);
$I18N['your-plan'] = array(
	'en' => 'Your Plan',
	'zh-cn' => '會員時長'
);
$I18N['days'] = array(
	'en' => 'Days',
	'zh-cn' => '天'
);
$I18N['plan-expired'] = array(
	'en' => 'Expired',
	'zh-cn' => '已過期'
);
$I18N['lifetime'] = array(
	'en' => 'Lifetime',
	'zh-cn' => '永久'
);
$I18N['plan-expire-at'] = array(
	'en' => 'Expire at $1',
	'zh-cn' => '$1 過期'
);
$I18N['available-data'] = array(
	'en' => 'Available Data',
	'zh-cn' => '剩余流量'
);
$I18N['used-today'] = array(
	'en' => 'Used today',
	'zh-cn' => '今日已用'
);
$I18N['online-devices'] = array(
	'en' => 'Online Devices',
	'zh-cn' => '在線設備數'
);
$I18N['last-used-time'] = array(
	'en' => 'Last used time',
	'zh-cn' => '上次使用時間'
);
$I18N['never-used'] = array(
	'en' => 'Never used',
	'zh-cn' => '從未使用過'
);
$I18N['balance'] = array(
	'en' => 'Balance',
	'zh-cn' => '錢包余額'
);
$I18N['announcement'] = array(
	'en' => 'Announcement',
	'zh-cn' => '公告'
);
$I18N['data-usage-72-hours'] = array(
	'en' => 'Data Usage of Recent 72 Hours',
	'zh-cn' => '最近72小時流量使用情況'
);
$I18N['load-data'] = array(
	'en' => 'Load Data',
	'zh-cn' => '加載數據'
);
$I18N['data-useage'] = array(
	'en' => 'Data Usage',
	'zh-cn' => '流量使用情況'
);
$I18N['data-used'] = array(
	'en' => 'Used',
	'zh-cn' => '已用'
);
$I18N['data-available'] = array(
	'en' => 'Available',
	'zh-cn' => '可用'
);
$I18N['data-used-today'] = array(
	'en' => 'Used Today',
	'zh-cn' => '今日已用'
);
$I18N['quick-import'] = array(
	'en' => 'Quick Import',
	'zh-cn' => '便捷導入(更多訂閱請前往<a href="https://t.me/spccat_bot" target="_blank">tg機器人</a>查詢)'
);
$I18N['import-clash-config'] = array(
	'en' => 'Import ClashX / CFW / CFA Config',
	'zh-cn' => '壹鍵導入 ClashX / CFW / CFA 配置'
);
$I18N['import-quantumult-config'] = array(
	'en' => 'Import Quantumult Config',
	'zh-cn' => '壹鍵導入 Quantumult 配置'
);
$I18N['import-quantumultx-config'] = array(
	'en' => 'Copy QuantumultX Config URL',
	'zh-cn' => '複製 QuantumultX 訂閲'
);
$I18N['import-shadowrocket-config'] = array(
	'en' => 'Import Shadowrocket Config',
	'zh-cn' => '壹鍵導入 Shadowrocket 配置'
);
$I18N['import-surfboard-config'] = array(
	'en' => 'Import Surboard Config',
	'zh-cn' => '壹鍵導入 Surfboard 配置'
);
$I18N['import-surge-config'] = array(
	'en' => 'Surge Configs',
	'zh-cn' => 'Surge 托管配置'
);
$I18N['import-surge-version-config'] = array(
	'en' => 'Import Surge $1 Config',
	'zh-cn' => '壹鍵導入 Surge $1 托管配置'
);
$I18N['import-ssr-config'] = array(
	'en' => 'Import SSR Config',
	'zh-cn' => '壹鍵導入 SSR 訂閱鏈接'
);
$I18N['copy-surge-version-config-url'] = array(
	'en' => 'Copy Surge $1 Config URL',
	'zh-cn' => '復制 Surge $1 托管配置鏈接'
);
$I18N['copy-kitsunebi-config-url'] = array(
	'en' => 'Copy Kitsunebi Config URL',
	'zh-cn' => '復制 Kitsunebi 訂閱鏈接'
);
$I18N['ssr-config'] = array(
	'en' => 'SSR Config',
	'zh-cn' => 'SSR 訂閱鏈接'
);
$I18N['copy-ssr-config-url'] = array(
	'en' => 'Copy SSR Config URL',
	'zh-cn' => '復制 SSR 訂閱鏈接'
);
$I18N['copy-ss-config-url'] = array(
	'en' => 'Copy SS Config URL',
	'zh-cn' => '復制 SS 訂閱鏈接'
);
$I18N['copy-v2ray-config-url'] = array(
	'en' => 'Copy V2Ray Config URL',
	'zh-cn' => '復制 V2Ray 訂閱鏈接'
);
$I18N['copy-ssd-config-url'] = array(
	'en' => 'Copy SSD Config URL',
	'zh-cn' => '復制 SSD 訂閱鏈接'
);
$I18N['copy-ss-urls'] = array(
	'en' => 'Copy SS URLs',
	'zh-cn' => '批量復制 SS 鏈接'
);
$I18N['copy-ssr-urls'] = array(
	'en' => 'Copy SSR URLs',
	'zh-cn' => '批量復制 SSR 鏈接'
);
$I18N['copy-vmess-urls'] = array(
	'en' => 'Copy Vmess URLs',
	'zh-cn' => '批量復制 Vmess 鏈接'
);
$I18N['new-user-guide-lead'] = array(
	'en' => 'Start using our service by',
	'zh-cn' => '按照下面步驟開始使用吧!'
);
$I18N['new-user-guide-setp-1'] = array(
	'en' => 'Subscribe to your perfect plan or have a free trial at the store',
	'zh-cn' => '前往商店購買會員訂閱計劃或免費試用'
);
$I18N['new-user-guide-setp-2'] = array(
	'en' => 'Follow the steps in tutorials to setup your devices',
	'zh-cn' => '下載客戶端並按照教程安裝'
);
$I18N['new-user-guide-setp-3'] = array(
	'en' => 'Enjoy our fast and reliable service',
	'zh-cn' => '開開心心看世界'
);
$I18N['read'] = array(
	'en' => '已讀',
	'zh-cn' => 'Read'
);
$I18N['important-announcement'] = array(
	'en' => 'Important Announcement',
	'zh-cn' => '重要通知'
);

## Store 商店 ##
$I18N['store'] = array(
	'en' => 'Store',
	'zh-cn' => '購買訂閱'
);
$I18N['purchase-data-add-on'] = array(
	'en' => 'Purchase Data Add-on',
	'zh-cn' => '購買流量疊加包'
);
$I18N['ban_purchase'] = array(
	'en' => 'Prohibit Purchase',
	'zh-cn' => '訂閱(不可叠加)'
);
$I18N['Repurchase'] = array(
	'en' => 'Overlay Purchase',
	'zh-cn' => '訂閱(可叠加)'
);
$I18N['purchase'] = array(
	'en' => 'Purchase',
	'zh-cn' => '訂閱'
);
$I18N['data-add-on-item'] = array(
	'en' => '$1 CNY - $2GB Data Add-on',
	'zh-cn' => '$1 元 $2GB 流量疊加包'
);
$I18N['store-title'] = array(
	'en' => 'Choose Your Subscription Plan',
	'zh-cn' => '選擇合適的會員訂閱計劃'
);
$I18N['store-sub-title'] = array(
	'en' => 'We Dedicate to Providing the Finest Network Proxy Service',
	'zh-cn' => '折扣碼使用方法：計算折扣后價格->充值到餘額->購買時輸入'
);
$I18N['start-trail'] = array(
	'en' => 'Start Trail',
	'zh-cn' => '開始試用'
);
$I18N['mo'] = array(
	'en' => ' mo',
	'zh-cn' => '月'
);
$I18N['subscribe-plan'] = array(
	'en' => 'Subscribe Plan',
	'zh-cn' => '購買會員計劃'
);
$I18N['choose-plan'] = array(
	'en' => 'Choose Plan',
	'zh-cn' => '選擇會員計劃'
);
$I18N['choose-plan-time'] = array(
	'en' => 'Plan Time',
	'zh-cn' => '選擇會員時長'
);
$I18N['1-month'] = array(
	'en' => '1 Month',
	'zh-cn' => '1個月'
);
$I18N['3-months'] = array(
	'en' => '3 Months',
	'zh-cn' => '3個月'
);
$I18N['6-months'] = array(
	'en' => '6 Months',
	'zh-cn' => '6個月'
);
$I18N['12-months'] = array(
	'en' => '12 Months',
	'zh-cn' => '12個月'
);
$I18N['autorenew'] = array(
	'en' => 'Autorenew',
	'zh-cn' => '自動續費'
);
$I18N['autorenew-disable'] = array(
	'en' => 'Disable',
	'zh-cn' => '關閉'
);
$I18N['autorenew-enable'] = array(
	'en' => 'Enable',
	'zh-cn' => '啟用'
);
$I18N['payment-notice'] = array(
	'en' => '* Uses balance when available',
	'zh-cn' => '* 默認抵扣賬戶余額'
);
$I18N['read-before-subscribe'] = array(
	'en' => 'Read Before Subscribe',
	'zh-cn' => '購買須知'
);
$I18N['read-before-subscribe-content'] = array(
	'en' => '
        <div class="bullet"></div> xxxxxxxxxxxxxxxxxxx<br>
        <div class="bullet"></div> xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    ',
	'zh-cn' => '
        <div class="bullet"></div> 購買會員計劃即代表同意《服務條款》和《使用政策》。<br>
        <div class="bullet"></div> 流量每30天重置壹次 (從購買日開始計算)，未使用的流量不結轉到下個周期。
    '
);
$I18N['product-name'] = array(
	'en' => 'Product',
	'zh-cn' => '商品名稱'
);
$I18N['total-price'] = array(
	'en' => 'Total Price',
	'zh-cn' => '總價'
);
$I18N['discount'] = array(
	'en' => 'Discount',
	'zh-cn' => '優惠'
);
$I18N['pay-with-balance'] = array(
	'en' => 'Pay with Balance',
	'zh-cn' => '余額支付'
);
$I18N['still-need-to-pay'] = array(
	'en' => 'Still Need to Pay',
	'zh-cn' => '還需要支付'
);
$I18N['apply-promo-code'] = array(
	'en' => 'Apply Promo Code',
	'zh-cn' => '使用優惠碼'
);
$I18N['enter-promo-code'] = array(
	'en' => 'Enter Promo Code',
	'zh-cn' => '輸入優惠碼'
);
$I18N['validate-code'] = array(
	'en' => 'Validate Code',
	'zh-cn' => '驗證優惠碼'
);
$I18N['pay-now'] = array(
	'en' => 'Pay Now',
	'zh-cn' => '立即支付'
);
$I18N['pay-now-modal-text'] = array(
	'en' => 'Click "Continue" to redirect to the payment page<br>
    It takes a while to proccess your order after payment. Please do not close this page.',
	'zh-cn' => '點擊“繼續支付”打開支付頁面支付<br>
    支付到賬需要壹段時間，請勿關閉或刷新此頁面'
);
$I18N['continue-pay'] = array(
	'en' => 'Continue',
	'zh-cn' => '繼續支付'
);
$I18N['open-app-to-scan-qrcode'] = array(
	'en' => 'Open $1 to scan the QR Code',
	'zh-cn' => '打開$1，掃碼支付'
);
$I18N['shop-dont-close-windows-hint'] = array(
	'en' => 'It takes a while to proccess your order after payment. Please do not close this page.',
	'zh-cn' => '支付到賬需要壹段時間，請勿關閉或刷新此頁面'
);
$I18N['go-to-alipay-app'] = array(
	'en' => 'Go to Alipay app',
	'zh-cn' => '打開手機支付寶支付'
);
$I18N['shop-ask-if-user-have-promo-code'] = array(
	'en' => 'Do you have a promo code? Click "Next" if you don&apos;t',
	'zh-cn' => '是否有優惠碼？沒有請直接點下壹步'
);
$I18N['data'] = array(
	'en' => 'Data',
	'zh-cn' => '流量'
);
$I18N['close'] = array(
	'en' => 'close',
	'zh-cn' => '关闭'
);


## Account 我的賬號 ##
$I18N['my-account'] = array(
	'en' => 'Account',
	'zh-cn' => '我的賬號'
);
$I18N['change-password'] = array(
	'en' => 'Change Password',
	'zh-cn' => '修改密碼'
);
$I18N['change-password-desc'] = array(
	'en' => 'We suggest you change password regularly',
	'zh-cn' => '定期修改為高強度密碼以保護您的賬號'
);
$I18N['change'] = array(
	'en' => 'Change',
	'zh-cn' => '立即修改'
);
$I18N['current-password'] = array(
	'en' => 'Current Password',
	'zh-cn' => '當前密碼'
);
$I18N['new-password'] = array(
	'en' => 'New Password',
	'zh-cn' => '新密碼'
);
$I18N['confirm-new-password'] = array(
	'en' => 'Confirm New Password',
	'zh-cn' => '確認新密碼'
);
$I18N['change-password-modal-confirm'] = array(
	'en' => 'Change',
	'zh-cn' => '確定修改'
);
$I18N['connect-to-telegram'] = array(
	'en' => 'Connect to Telegram',
	'zh-cn' => '綁定 Telegram 賬號'
);
$I18N['connect-to-telegram-desc'] = array(
	'en' => 'You can login with Telegram after connect',
	'zh-cn' => '綁定後可使用 Telegram 快速登錄網站和機器人 <a href="https://t.me/$1" target="blank">@$1</a>'
);
$I18N['telegram-connect'] = array(
	'en' => 'Connect',
	'zh-cn' => '立即綁定'
);
$I18N['telegram-modal-desc'] = array(
	'en' => 'Copy this bind code and send to the Telegram Bot <a href="https://t.me/$1" target="blank">@$1</a>',
	'zh-cn' => '將下面的綁定碼復制發送給 Telegram 機器人 <a href="https://t.me/$1" target="blank">@$1</a>'
);
$I18N['connect-to-another-account'] = array(
	'en' => 'Connect to a new account',
	'zh-cn' => '綁定其他賬號'
);
$I18N['currently-connected-to-telegram-account'] = array(
	'en' => '當前綁定 Telegram 賬號',
	'zh-cn' => '綁定其他賬號'
);
$I18N['two-factor-authentication'] = array(
	'en' => 'Two-factor Authentication',
	'zh-cn' => '二步驗證'
);
$I18N['2fa-desc'] = array(
	'en' => '2FA is an extra layer of security for your account',
	'zh-cn' => '為您的帳號添加壹道額外的安全保障'
);
$I18N['2fa-enable'] = array(
	'en' => 'Enable',
	'zh-cn' => '立即開啟'
);
$I18N['2fa-modal-setp-1-desc'] = array(
	'en' => 'Please scan the QR Code with a 2FA app, Google Authenticator is recommended',
	'zh-cn' => '請使用二步驗證APP掃描二維碼，推薦使用 Google Authenticator'
);
$I18N['2fa-modal-setp-2-desc'] = array(
	'en' => 'Please enter the 6-digit code shown on the app',
	'zh-cn' => '請輸入二步驗證APP上的6位驗證碼'
);
$I18N['6-digit-code'] = array(
	'en' => '6-Digit Code',
	'zh-cn' => '6位驗證碼'
);
$I18N['2fa-enbaled-desc'] = array(
	'en' => 'You have enabled 2FA for your account',
	'zh-cn' => '您的賬號已開啟二步驗證'
);
$I18N['disable-2fa'] = array(
	'en' => 'Disable',
	'zh-cn' => '關閉二步驗證'
);
$I18N['delete-account'] = array(
	'en' => 'Delete Account',
	'zh-cn' => '刪除賬號'
);
$I18N['delete-account-desc'] = array(
	'en' => 'All your data will be deleted and not recoverable',
	'zh-cn' => '您的所有數據都會被刪除，無法找回'
);
$I18N['delete-account-button'] = array(
	'en' => 'Delete',
	'zh-cn' => '申請刪除'
);
$I18N['delete-account-modal-desc'] = array(
	'en' => 'Warning: All your data will be deteled and nonrecoverable!',
	'zh-cn' => '註意：您的所有數據都會被刪除，無法找回。'
);
$I18N['delete-account-enter-password-hint'] = array(
	'en' => 'Please enter your account password to proceed',
	'zh-cn' => '請輸入賬號登錄密碼確認'
);
$I18N['delete-account-confirm'] = array(
	'en' => 'Yes, I am Sure',
	'zh-cn' => '確定刪除'
);
$I18N['5-mins-used-ip'] = array(
	'en' => 'IP Used in Last 5 Minutes',
	'zh-cn' => '最近五分鐘使用IP'
);
$I18N['not-use-service-in-5-mins'] = array(
	'en' => 'You have not used our service in last 5 minutes',
	'zh-cn' => '最近五分鐘未使用服務'
);
$I18N['10-login-ip'] = array(
	'en' => 'Last 10 Successful Login IP',
	'zh-cn' => '最近十次登錄IP'
);
$I18N['location'] = array(
	'en' => 'Location',
	'zh-cn' => '地點'
);

## Wallet 我的錢包 ##
$I18N['wallet'] = array(
	'en' => 'Wallet',
	'zh-cn' => '錢包充值'
);
$I18N['top-up'] = array(
	'en' => 'Top-up',
	'zh-cn' => '充值'
);
$I18N['redeem-gift-code'] = array(
	'en' => 'Redeem Gift Code',
	'zh-cn' => '使用充值碼'
);
$I18N['redeem-gift-code1'] = array(
	'en' => 'By Gift Code',
	'zh-cn' => '購買充值碼'
);
$I18N['please-enter-the-code'] = array(
	'en' => 'Please enter the code',
	'zh-cn' => '請輸入充值碼'
);
$I18N['redeem'] = array(
	'en' => 'Redeem',
	'zh-cn' => '使用'
);
$I18N['top-up-history'] = array(
	'en' => 'Top-up History',
	'zh-cn' => '充值&兌換記錄'
);
$I18N['no-top-up-history'] = array(
	'en' => 'No Top-up History',
	'zh-cn' => '無充值記錄'
);
$I18N['gift-code'] = array(
	'en' => 'Gift Code',
	'zh-cn' => '充值碼'
);
$I18N['type'] = array(
	'en' => 'Type',
	'zh-cn' => '類型'
);
$I18N['amount'] = array(
	'en' => 'Amount',
	'zh-cn' => '金額'
);
$I18N['please-enter-amount-feedback'] = array(
	'en' => 'Please enter amount',
	'zh-cn' => '請輸入金額'
);
$I18N['date'] = array(
	'en' => 'Date',
	'zh-cn' => '日期'
);
$I18N['purchase-history'] = array(
	'en' => 'Purchase History',
	'zh-cn' => '購買記錄'
);
$I18N['no-purchase-history'] = array(
	'en' => 'No Purchase History',
	'zh-cn' => '無購買記錄'
);
$I18N['product'] = array(
	'en' => 'Product',
	'zh-cn' => '商品'
);
$I18N['price'] = array(
	'en' => 'Price',
	'zh-cn' => '價格'
);
$I18N['purchase-date'] = array(
	'en' => 'Purchase Date',
	'zh-cn' => '購買時間'
);
$I18N['renewal-date'] = array(
	'en' => 'Renewal Date',
	'zh-cn' => '續費時間'
);
$I18N['auto-renewal-off'] = array(
	'en' => 'Auto-Renewal Off',
	'zh-cn' => '不自動續費'
);
$I18N['auto-renewal-at'] = array(
	'en' => 'Auto-Renewal at $1',
	'zh-cn' => '在 $1 續費'
);
$I18N['data-reset-when-renewal'] = array(
	'en' => 'Data Reset when Renewal',
	'zh-cn' => '續費時重置流量'
);
$I18N['data-auto-reset-off'] = array(
	'en' => 'Data Auto-Renewal Off',
	'zh-cn' => '不自動重置'
);
$I18N['data-auto-reset-on'] = array(
	'en' => 'Data Auto Reset On',
	'zh-cn' => '自動重置'
);
$I18N['no-action'] = array(
	'en' => 'No Action',
	'zh-cn' => '無操作'
);
$I18N['turn-off-auto-renewal'] = array(
	'en' => 'Turn off auto-renewal',
	'zh-cn' => '關閉自動續費'
);
$I18N['payment'] = array(
	'en' => 'Payment',
	'zh-cn' => '支付方式'
);

## Affiliation 邀請註冊 ##
$I18N['aff'] = array(
	'en' => 'Affiliation',
	'zh-cn' => '邀請返利'
);
$I18N['total-aff-reward'] = array(
	'en' => 'Total Affiliation Reward',
	'zh-cn' => '累計獲得返利金額'
);
$I18N['aff-card-title'] = array(
	'en' => 'When You Invite Your Friend',
	'zh-cn' => '當您邀請朋友註冊時'
);
$I18N['aff-card-content-1'] = array(
	'en' => 'Whenever s/he makes a payment, you will be rewarded by <b>$1%</b> of the payment amount',
	'zh-cn' => '每次TA充值時，您都會獲得TA的充值金額 <b>$1%</b> 的返利'
);
$I18N['aff-card-content-2'] = array(
	'en' => 'Also, you will get a <b>$1GB</b> Data Usage reward',
	'zh-cn' => '您將壹次性獲得 <b>$1GB</b> 流量獎勵'
);
$I18N['aff-card-content-3'] = array(
	'en' => 'and your friend will get a <b>10 CNY</b> reward',
	'zh-cn' => 'TA將獲得 <b>1</b> 元獎勵作為初始資金'
);
$I18N['copy-inivtation-link'] = array(
	'en' => ' Copy Inivtation Link',
	'zh-cn' => '復制邀請鏈接'
);
$I18N['chances-of-invitation-left'] = array(
	'en' => '$1 Chances of Invitation Left',
	'zh-cn' => '剩余 $1 次邀請次數'
);
$I18N['inivitation-link-settings'] = array(
	'en' => 'Inivitation Link Settings',
	'zh-cn' => '邀請鏈接設置'
);
$I18N['purchase-invitation-chances'] = array(
	'en' => 'Purchase Invitation Chances',
	'zh-cn' => '購買邀請次數'
);
$I18N['customize-my-link'] = array(
	'en' => 'Customize My Link',
	'zh-cn' => '定制邀請鏈接'
);
$I18N['reset-my-link'] = array(
	'en' => 'Reset My Link',
	'zh-cn' => '重置邀請鏈接'
);
$I18N['affiliation-history'] = array(
	'en' => 'Affiliation History',
	'zh-cn' => '返利記錄'
);

$I18N['invitee-id'] = array(
	'en' => 'Invitee ID',
	'zh-cn' => '被邀請用戶ID'
);
$I18N['reward'] = array(
	'en' => 'Reward',
	'zh-cn' => '獲得返利'
);
$I18N['codes-list'] = array(
	'en' => 'codes-list',
	'zh-cn' => '充值碼列表'
);
$I18N['codes-content'] = array(
	'en' => 'content',
	'zh-cn' => '内容'
);

$I18N['if-codes-used'] = array(
	'en' => 'if used',
	'zh-cn' => '是否使用'
);
$I18N['codes-used'] = array(
	'en' => 'Used',
	'zh-cn' => '已使用'
);
$I18N['codes-notused'] = array(
	'en' => 'NOt Used',
	'zh-cn' => '未使用'
);
$I18N['enter-codes-num'] = array(
	'en' => 'Enter codes num',
	'zh-cn' => '兌換數量'
);
$I18N['enter-codes-money'] = array(
	'en' => 'Enter codes money',
	'zh-cn' => '單張面值'
);
$I18N['enter-integer'] = array(
	'en' => 'Enter an integer',
	'zh-cn' => '請輸入整數，兌換成功將從賬戶餘額自動扣除'
);
$I18N['enter-integer-error'] = array(
	'en' => 'Please enter an integer',
	'zh-cn' => '請輸入正確内容'
);
$I18N['no-affiliation-history'] = array(
	'en' => 'No Affiliation History',
	'zh-cn' => '無返利記錄'
);
$I18N['no-codes-history'] = array(
	'en' => 'No Codes History',
	'zh-cn' => '無兌換記錄'
);

$I18N['purchase-codes'] = array(
	'en' => 'Purchase Codes',
	'zh-cn' => '兌換充值碼'
);
$I18N['purchase-invitation-chances'] = array(
	'en' => 'Purchase Invitation Chances',
	'zh-cn' => '購買邀請次數'
);
$I18N['invitation-chances-price'] = array(
	'en' => 'At $1 CNY/Chance',
	'zh-cn' => '價格為$1元/次'
);
$I18N['enter-invitation-chances'] = array(
	'en' => 'Enter the amount of chances you want to purchase',
	'zh-cn' => '請輸入想要購買的次數'
);
$I18N['customize-invitation-link'] = array(
	'en' => 'Customize Invitation Link',
	'zh-cn' => '定制邀請鏈接'
);
$I18N['customize-invitation-link-price'] = array(
	'en' => 'At $1 CNY/Time',
	'zh-cn' => '價格為$1元/次'
);
$I18N['enter-customize-invitation-link-postfix'] = array(
	'en' => 'Enter your customized postfix of your link',
	'zh-cn' => '輸入鏈接後綴'
);
$I18N['reset-invitation-link'] = array(
	'en' => 'Reset Invitation Link',
	'zh-cn' => '重置邀請鏈接'
);
$I18N['reset-invitation-link-desc'] = array(
	'en' => 'Are you sure to reset your link? Click "Confirm" to proceed, and this page will refresh',
	'zh-cn' => '確定要要重置邀請鏈接嗎？點擊確定後會重置並自動刷新本頁。'
);
$I18N['reward'] = array(
	'en' => 'Reward',
	'zh-cn' => '獲得返利'
);
$I18N['reward'] = array(
	'en' => 'Reward',
	'zh-cn' => '獲得返利'
);
$I18N['reward'] = array(
	'en' => 'Reward',
	'zh-cn' => '獲得返利'
);

## Servers 節點列表 ##
$I18N['servers'] = array(
	'en' => 'Servers',
	'zh-cn' => '節點列表'
);
$I18N['online'] = array(
	'en' => 'Online',
	'zh-cn' => '在線'
);
$I18N['rate'] = array(
	'en' => 'Rate',
	'zh-cn' => '倍率'
);
$I18N['load'] = array(
	'en' => 'Load',
	'zh-cn' => '負載'
);
$I18N['speedlimit'] = array(
	'en' => 'Speedlimit',
	'zh-cn' => '限速'
);
$I18N['address'] = array(
	'en' => 'Address',
	'zh-cn' => '地址'
);
$I18N['transport'] = array(
	'en' => 'transport',
	'zh-cn' => '傳輸協議'
);
$I18N['path'] = array(
	'en' => 'Path',
	'zh-cn' => '路徑'
);
$I18N['camouflage-type'] = array(
	'en' => 'Camouflage Type',
	'zh-cn' => '偽裝方式'
);
$I18N['vmess-url'] = array(
	'en' => 'Vmess URL',
	'zh-cn' => 'VMess鏈接'
);
$I18N['server-info'] = array(
	'en' => 'Server Info',
	'zh-cn' => '節點信息'
);


## Apps and Tutorial 下載和使用 ##
$I18N['apps-and-tutorial'] = array(
	'en' => 'Apps and Tutorial',
	'zh-cn' => '使用教程'
);
$I18N['windows-minimal-version'] = array(
	'en' => 'For Windows 7 or later',
	'zh-cn' => '適用於 Windows 7 或更高版本'
);
$I18N['ios-minimal-version'] = array(
	'en' => 'For iOS 9 or later',
	'zh-cn' => '適用於 iOS 9 或更高版本'
);
$I18N['android-minimal-version'] = array(
	'en' => 'For Android 5.0 or later',
	'zh-cn' => '適用於 Android 5.0 或更高版本'
);
$I18N['mac-minimal-version'] = array(
	'en' => 'For macOS Sierra (10.12) or later',
	'zh-cn' => '適用於 macOS Sierra (10.12) 或更高版本'
);
$I18N['linux-minimal-version'] = array(
	'en' => 'Works with probably all distributions',
	'zh-cn' => '適用於……所有版本？'
);
$I18N['faq-desc'] = array(
	'en' => 'Frequently Asked Questions',
	'zh-cn' => '常見問題'
);

## Config History 訂閱記錄 ##
$I18N['config-history'] = array(
	'en' => 'Config History',
	'zh-cn' => '訂閱記錄'
);
$I18N['traffic-history'] = array(
	'en' => 'traffic History',
	'zh-cn' => '流量記錄'
);
$I18N['traffic-used-node'] = array(
	'en' => 'used node',
	'zh-cn' => '使用節點'
);
$I18N['trafficlog'] = array(
	'en' => 'trafficlog',
	'zh-cn' => '流量记录'
);
$I18N['config-history-notice'] = array(
	'en' => 'You can look up all your server config sub log on this page to make sure your account is not compromised',
	'zh-cn' => '您可在此查詢您賬戶所有的訂閱記錄，確保您的賬戶沒有被盜用'
);
$I18N['traffic-history-notice'] = array(
	'en' => 'You can look up all your server config traffic used log on this page to make sure your account is not compromised',
	'zh-cn' => '您可在此查詢您賬戶3天内的流量記錄，確保您的賬戶沒有被盜用'
);
$I18N['no-config-history-yet'] = array(
	'en' => 'No config history yet',
	'zh-cn' => '暫無訂閱記錄'
);

## Shared Account 共享賬號 ##
$I18N['shared-account'] = array(
	'en' => 'Shared Account',
	'zh-cn' => '共享賬號'
);
$I18N['account'] = array(
	'en' => 'Account',
	'zh-cn' => '賬號'
);
$I18N['click-to-copy'] = array(
	'en' => 'Click to copy',
	'zh-cn' => '點擊復制'
);
$I18N['no-access-to-shared-account-desc'] = array(
	'en' => 'Your current plan dose not have access to this account.',
	'zh-cn' => '您目前訂閱的會員計劃無法查看此共享賬號，請升級會員計劃。'
);

## Ticket Support 工單支持 ##
$I18N['ticket-support'] = array(
	'en' => 'Ticket Support',
	'zh-cn' => '工單支持'
);
$I18N['new-ticket'] = array(
	'en' => 'New Ticket',
	'zh-cn' => '提交工單'
);
$I18N['notice'] = array(
	'en' => 'Notice',
	'zh-cn' => '提示'
);
$I18N['username'] = array(
	'en' => 'username',
	'zh-cn' => '用戶名'
);
$I18N['nodename'] = array(
	'en' => 'nodename',
	'zh-cn' => '節點名'
);
$I18N['useredtarffic'] = array(
	'en' => 'useredtarffic',
	'zh-cn' => '使用流量'
);
$I18N['new-ticket-notice'] = array(
	'en' => 'Make sure you check the FAQ page before creating a new ticket',
	'zh-cn' => '新建工單前請在FAQ頁面查看常見問題解答'
);
$I18N['title'] = array(
	'en' => 'Title',
	'zh-cn' => '標題'
);
$I18N['content'] = array(
	'en' => 'Content',
	'zh-cn' => '內容'
);
$I18N['submit'] = array(
	'en' => 'Submit',
	'zh-cn' => '提交'
);
$I18N['my-tickets'] = array(
	'en' => 'My Tickets',
	'zh-cn' => '工單列表'
);
$I18N['create-at'] = array(
	'en' => 'Create at',
	'zh-cn' => '創建時間'
);
$I18N['status'] = array(
	'en' => 'Status',
	'zh-cn' => '狀態'
);
$I18N['ticket-closed'] = array(
	'en' => 'Closed',
	'zh-cn' => '已關閉'
);
$I18N['ticket-open'] = array(
	'en' => 'Open',
	'zh-cn' => '處理中'
);
$I18N['reply-ticket'] = array(
	'en' => 'Reply',
	'zh-cn' => '回復'
);
$I18N['close-ticket'] = array(
	'en' => 'Close',
	'zh-cn' => '關閉'
);
$I18N['view-ticket'] = array(
	'en' => 'View Ticket',
	'zh-cn' => '查看工單'
);

## Server Settings 節點設置 ##
$I18N['server-settings'] = array(
	'en' => 'Nodes Settings',
	'zh-cn' => '節點鏈接'
);
$I18N['server-settings-notice'] = array(
	'en' => 'You may need to update your configuration on your devices after you change any configurations',
	'zh-cn' => '修改設置後您可能需要在客戶端更新節點列表才能恢復使用'
);
$I18N['server-password'] = array(
	'en' => 'Server Password',
	'zh-cn' => '連接密碼'
);
$I18N['server-password-desc'] = array(
	'en' => 'When you change your password, your V2Ray UUID will also change. Please update your remote configuration after changing your password.',
	'zh-cn' => '您需要了解的是，此密碼只與節點密碼有關不會更改您的賬戶登錄密碼，修改後請註意及時更新托管訂閱。'
);
$I18N['current-server-password'] = array(
	'en' => 'Current Server Password',
	'zh-cn' => '當前連接密碼'
);
$I18N['apply-changes'] = array(
	'en' => 'Apply Changes',
	'zh-cn' => '提交更改'
);
$I18N['enter-new-server-password'] = array(
	'en' => 'Enter New Server Password',
	'zh-cn' => '輸入新密碼'
);
$I18N['ramdom-password'] = array(
	'en' => 'Ramdom Password',
	'zh-cn' => '隨機生成密碼'
);
$I18N['encryption'] = array(
	'en' => 'Encryption',
	'zh-cn' => '加密方式（已廢棄的功能）'
);
$I18N['encryption-desc'] = array(
	'en' => 'Be reminded that SS/SSD/SSR may vary in support of different protocols & obfs',
	'zh-cn' => 'SS/SSD/SSR 支持的加密方式有所不同，請根據實際情況來進行選擇'
);
$I18N['current-encryption'] = array(
	'en' => 'Current Encryption',
	'zh-cn' => '當前加密方式'
);
$I18N['protocol-and-obfs'] = array(
	'en' => 'Protocol & Obfs',
	'zh-cn' => '協議和混淆（已廢棄的功能）'
);
$I18N['protocol-desc'] = array(
	'en' => 'To make your settings compatible to SS/SSD, please choose "origin" or protocols with "_compatible"<br>
    auth_chain series are experimental protocols, which may cause service unstability. Make sure you ask us about this before you choose this series of protocols',
	'zh-cn' => '如果需要兼容 SS/SSD 請設置為 origin 或選擇帶_compatible的兼容選項<br>
    auth_chain 系為實驗性協議，可能造成不穩定或無法使用，開啟前請詢問是否支持'
);
$I18N['current-protocol'] = array(
	'en' => 'Current Protocol',
	'zh-cn' => '當前協議'
);
$I18N['obfs-desc'] = array(
	'en' => 'Be reminded that SS/SSD/SSR may vary in support of different protocols & obfs<br>
    If you are using SS/SSD clients, make sure you understand how to download and install obfs plugins',
	'zh-cn' => '如果需要兼容 SS/SSD 請設置為 plain 或選擇帶_compatible的兼容選項<br>
    SS/SSD 和 SSR 支持的混淆類型有所不同，simple_obfs_* 為 SS/SSD 的混淆方式，其他為 SSR 的混淆方式<br>
    如果使用 SS/SSD 作為客戶端，請確保自己知道如何下載並使用混淆插件'
);
$I18N['current-obfs'] = array(
	'en' => 'Current Obfs',
	'zh-cn' => '當前混淆方式'
);
$I18N['current-obfs-param'] = array(
	'en' => 'Current Obfs Param',
	'zh-cn' => '當前混淆參數'
);
$I18N['enter-your-obfs-param'] = array(
	'en' => 'Enter your obfs param',
	'zh-cn' => '輸入妳的混淆參數'
);
$I18N['reset-config-url'] = array(
	'en' => 'Reset Config URL',
	'zh-cn' => '重置訂閱鏈接'
);
$I18N['reset-config-url-desc'] = array(
	'en' => 'Click to reset your subscribe link. This operation is not invertable.',
	'zh-cn' => '點擊會重置您的訂閱鏈接，此操作不可逆，請謹慎操作。'
);
$I18N['currnt-config-url'] = array(
	'en' => 'Current Config URL',
	'zh-cn' => '當前訂閱鏈接'
);
$I18N['reset'] = array(
	'en' => 'Reset',
	'zh-cn' => '重置'
);
$I18N['reset-port'] = array(
	'en' => 'Reset Port',
	'zh-cn' => '重置端口(已廢棄的功能)'
);
$I18N['reset-port-desc'] = array(
	'en' => 'Reset to a random port: <code>$1</code> CNY/Time.<br>Change will be effective in 1 min',
	'zh-cn' => '<p>隨機更換壹個端口使用，價格：<code>$1</code>元/次<br>重置後1分鐘內生效</p>'
);
$I18N['current-port'] = array(
	'en' => 'Current Port',
	'zh-cn' => '當前端口'
);
$I18N['customize-port'] = array(
	'en' => 'Customize Port',
	'zh-cn' => '定制端口'
);
$I18N['customize-port-desc'] = array(
	'en' => 'At <code>$1</code> CNY/Time<br>
    Port Range: <code>$2～$3</code>',
	'zh-cn' => '價格：<code>$1</code>元/次端口範圍：<code>$2～$3</code>'
);
$I18N['customize-port-input-placeholder'] = array(
	'en' => 'Enter the port you wish to use',
	'zh-cn' => '在這裏輸入妳想要的端口'
);

## Relay 中轉系統 ##
$I18N['relay-settings'] = array(
	'en' => 'Relay Settings',
	'zh-cn' => '中轉規則'
);
$I18N['relay-notice'] = array(
	'en' => 'Relay rules are used to redirect connection from a relay server to a target server<br>
    Please set the port as your own port<br>
    When there are multiple rules, the rule with a higher priority will be adopted<br>
    When a relay server is not set up, it may be used like how you use any other servers.',
	'zh-cn' => '中轉規則壹般由中國中轉至其他國外節點<br>
    請設置端口號為您自己的端口<br>
    優先級越大，代表其在多個符合條件的規則並存時會被優先采用，當優先級壹致時，先添加的規則會被采用<br>
    節點不設置中轉時，這個節點就可以當作壹個普通的節點來做代理使用<br>'
);
$I18N['add-rule'] = array(
	'en' => 'Add Rule',
	'zh-cn' => '添加規則'
);
$I18N['all-rules'] = array(
	'en' => 'All Rules',
	'zh-cn' => '所有規則'
);
$I18N['rules-table'] = array(
	'en' => 'Rules Talbe',
	'zh-cn' => '規則表'
);
$I18N['relay-table'] = array(
	'en' => 'Relay Table',
	'zh-cn' => '鏈路表'
);
$I18N['relay-server-origin'] = array(
	'en' => 'Relay Server (Origin)',
	'zh-cn' => '起源節點'
);
$I18N['target-server'] = array(
	'en' => 'Target Server	',
	'zh-cn' => '目標節點'
);
$I18N['port'] = array(
	'en' => 'Port',
	'zh-cn' => '端口'
);
$I18N['priority'] = array(
	'en' => 'Priority',
	'zh-cn' => '優先級'
);
$I18N['edit'] = array(
	'en' => 'Edit',
	'zh-cn' => '編輯'
);
$I18N['delete'] = array(
	'en' => 'Delete',
	'zh-cn' => '刪除'
);
$I18N['no-relay-rule'] = array(
	'en' => 'No Existing Relay Rule',
	'zh-cn' => '無中轉規則'
);
$I18N['relay-server-in-berween'] = array(
	'en' => 'Relay Server (In-Between)	',
	'zh-cn' => '途徑節點'
);
$I18N['no-relay-info'] = array(
	'en' => 'No Relay Info',
	'zh-cn' => '無鏈路信息'
);
$I18N['reset'] = array(
	'en' => 'Reset',
	'zh-cn' => '重置'
);
$I18N['edit-rule'] = array(
	'en' => 'Edit Rule',
	'zh-cn' => '編輯規則'
);
$I18N['edit'] = array(
	'en' => 'Edit',
	'zh-cn' => '編輯'
);
$I18N['no-relay'] = array(
	'en' => 'No Relay',
	'zh-cn' => '不進行中轉'
);

## Audit 審計系統 ##
$I18N['audit-system'] = array(
	'en' => 'Audit System',
	'zh-cn' => '審計系統'
);
$I18N['audit-rules'] = array(
	'en' => 'Audit Rules',
	'zh-cn' => '審計規則'
);
$I18N['audit-rules-notice'] = array(
	'en' => 'For a better user experience, we had to set up following block rules: your connections will be automatically dropped when you hit the following rules<br>
    About Privacy: Your connections are completely private and not monitored by any third party other than the block system itself; thank you for your understanding.',
	'zh-cn' => '為了愛與和平，也同時為了系統的正常運行，特制定了如下過濾規則，當您使用節點執行這些動作時，您的通信就會被截斷。<br>
    關於隱私：註意，我們僅用以下規則進行實時匹配和記錄匹配到的規則，您的通信方向和通信內容我們不會做任何記錄，請您放心。也請您理解我們對於這些不當行為的管理，謝謝 '
);
$I18N['rules'] = array(
	'en' => 'Rules',
	'zh-cn' => '規則'
);
$I18N['name'] = array(
	'en' => 'Name',
	'zh-cn' => '名稱'
);
$I18N['description'] = array(
	'en' => 'Description',
	'zh-cn' => '描述'
);
$I18N['regex'] = array(
	'en' => 'Regex',
	'zh-cn' => '正則表達式'
);
$I18N['type'] = array(
	'en' => 'Type',
	'zh-cn' => '類型'
);
$I18N['audit-logs'] = array(
	'en' => 'Audit Logs',
	'zh-cn' => '審計記錄'
);
$I18N['logs'] = array(
	'en' => 'Logs',
	'zh-cn' => '記錄'
);
$I18N['audit-logs-notice'] = array(
	'en' => 'All block records detected by the system.<br>
    About Privacy: Your connections are completely private and not monitored by any third party other than the block system itself; thank you for your understanding.',
	'zh-cn' => '系統中所有審計記錄。<br>
    關於隱私：註意，我們僅用以下規則進行實時匹配和記錄匹配到的規則，您的通信方向和通信內容我們不會做任何記錄，請您放心。也請您理解我們對於這些不當行為的管理，謝謝 '
);

## Other Modals ##
$I18N['purchase_info'] = array(
	'en' => '',
	'zh-cn' => '您當前等級購買此訂閲會被覆蓋，詳情查看<a href="/user/tutorial?os=faq" target="_blank">常見問題</a>'
);
$I18N['failed'] = array(
	'en' => 'Failed',
	'zh-cn' => '失敗'
);
$I18N['join-telegram-group-modal-text'] = array(
	'en' => '加入群組之前需要在 <a href="/user/profile">我的賬號</a> 頁面綁定 Telegram 賬號，未綁定則無法加入群組。',
	'zh-cn' => '加入群組之前需要在 <a href="/user/profile">我的賬號</a> 頁面綁定 Telegram 賬號，未綁定則無法加入群組。'
);
$I18N['success-got-daily-bonus'] = array(
	'en' => 'Wow',
	'zh-cn' => '簽到成功'
);
$I18N['got-daily-bonus'] = array(
	'en' => 'You got $1 MB data as bonus',
	'zh-cn' => '妳獲得了 $1 MB流量'
);
$I18N['server-password-changed-successfully'] = array(
	'en' => 'Server password changed successfully',
	'zh-cn' => '成功更改連接密碼'
);
$I18N['encryption-changed-successfully'] = array(
	'en' => 'Encryption changed successfully',
	'zh-cn' => '成功更改加密方式'
);
$I18N['protocol-and-obfs-changed-successfully'] = array(
	'en' => 'Protocol and obfs changed successfully',
	'zh-cn' => '成功設置混淆和協議'
);
$I18N['reset-config-url-confirm-modal-title'] = array(
	'en' => 'Are you sure you want to reset config url?',
	'zh-cn' => '確定要重置訂閱鏈接嗎?'
);
$I18N['reset-config-url-confirm-modal-desc'] = array(
	'en' => 'This operation is not invertable',
	'zh-cn' => '此操作不可逆，請謹慎操作'
);
$I18N['config-url-has-been-reseted'] = array(
	'en' => 'Your config url has been reseted',
	'zh-cn' => '已重置訂閱鏈接'
);
$I18N['config-url-reset-modal-desc'] = array(
	'en' => 'You need to update your config url on your devices after reset',
	'zh-cn' => '您需要在客戶端內刪除舊訂閱鏈接，然後添加新訂閱鏈接'
);
$I18N['port-reseted-successfully'] = array(
	'en' => 'Port reseted successfully',
	'zh-cn' => '成功重置端口'
);
$I18N['new-port'] = array(
	'en' => 'New port: ',
	'zh-cn' => '新端口: '
);
$I18N['customize-port-successfully'] = array(
	'en' => 'Customize port successfully',
	'zh-cn' => '成功定制端口'
);
$I18N['please-enter-the-amount-of-chances-feedback'] = array(
	'en' => 'Please enter the amount of chances',
	'zh-cn' => '請輸入購買次數'
);
$I18N['successful-purchase'] = array(
	'en' => 'Successful purchase',
	'zh-cn' => '購買成功'
);
$I18N['go-to-wallet'] = array(
	'en' => 'Go to wallet',
	'zh-cn' => '前往我的錢包充值'
);
$I18N['please-enter-postfix-inivitation-link-feedback'] = array(
	'en' => 'Please enter postfix of your link',
	'zh-cn' => '請輸入定制後綴'
);
$I18N['customize-inivitation-link-successfully'] = array(
	'en' => 'Customize inivitation link successfully',
	'zh-cn' => '成功定制邀請鏈接後綴'
);
$I18N['2fa-has-been-disabled'] = array(
	'en' => '2FA has been disabled for your account',
	'zh-cn' => '已關閉二步驗證'
);
$I18N['password-changed-successfully'] = array(
	'en' => 'Password changed successfully',
	'zh-cn' => '成功更改密碼'
);
$I18N['your-account-has-been-deleted'] = array(
	'en' => 'Your account has been deleted',
	'zh-cn' => '您的賬號已刪除，後會有期！'
);
$I18N['submitted'] = array(
	'en' => 'Submitted',
	'zh-cn' => '已提交'
);
$I18N['this-ticket-has-been-closed'] = array(
	'en' => 'This ticket has been closed',
	'zh-cn' => '此工單已關閉'
);
$I18N['unable-import-config-on-computer-modal'] = array(
	'en' => 'Unable import this config on computer, please tap import config button on your mobile device.',
	'zh-cn' => '導入配置到此客戶端需要在手機瀏覽器操作，無法在電腦端導入。'
);
$I18N['proceed'] = array(
	'en' => 'Proceed',
	'zh-cn' => '繼續操作'
);
$I18N['top-up-successful'] = array(
	'en' => 'Top-up successful',
	'zh-cn' => '充值成功'
);

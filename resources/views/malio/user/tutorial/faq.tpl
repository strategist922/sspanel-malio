<!DOCTYPE html>
<html lang="en">

<head>
	{include file='user/head.tpl'}

	<title>FAQ &mdash; {$config["appName"]}</title>

</head>

<body>
<div id="app">
	<div class="main-wrapper">
		{include file='user/navbar.tpl'}

		<!-- Main Content -->
		<div class="main-content">
			<section class="section">
				<div class="section-header">
					<div class="section-header-back">
						<a href="/user/tutorial" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
					</div>
					<h1>FAQ</h1>
				</div>
				<div class="section-body">
					<div class="row mt-sm-4">
						<div class="col-12">
							<div class="card">
								<div class="card-body" style="color:black">
									<h6 style="font-weight: 700;display: inline-block;font-size: 20px;margin-top: 10px;margin-bottom: 10px;color: #34395e;">賬戶問題</h6>
									<ol>
										<li>
											<p><strong>Q：套餐疊加購買規則是什麽？</strong><br>
												A：付費一個訂閱後商店界面不可疊加訂閱會變成「無法購買」灰色按鈕，可疊加訂閱變為「訂閱（可疊加）」按鈕，按需購買即可；<br>
												疊加規則為疊加等級時間與當月流量後續流量重置按照您最後一個購買的訂閲爲準進行重置；<br>
												例：某用戶某月<strong>1日</strong>購買了<strong>A1</strong>訂閲，同月5日購買了<strong>B1</strong>訂閲，則該用戶當月流量為<strong>120+200=320GB</strong>，有效期為<strong>90+30=120天</strong>，從<strong>5日</strong>起幾時<strong>30</strong>天的<strong>00：15</strong>時重置流量為<strong>B1</strong>訂閲的<strong>200GB</strong>；<br>
												如需升級訂閱（不支持降級訂閱）可提交工單會由專屬客服給出升級所需補充的差價，充值後即可升級訂閱。
											</p>
										</li>
										<li>
											<p><strong>Q：付款後多久到賬？</strong><br>
												A：正常情況下(99.9%的時間)付款成功後立刻自動到賬。可能由於網絡波動付款後長時間沒到賬請開工單聯系客服處理。
											</p>
										</li>
										<li>
											<p><strong>Q：賬號連接信息被他人盜用了，怎麽修改？</strong><br>
												A：賬號被他人盜用的話請在個人信息頁面修改節點連接密碼，然後重置訂閱連接。
											</p>
										</li>
										<li>
											<p><strong>Q：套餐可以退款嗎？</strong><br>
												A：由於虛擬產品的特殊性，所有套餐一經售出後都不支持退款，請確認後購買，謝謝您的支持和理解。
											</p>
										</li>
										<li>
											<p><strong>Q：賬號連接信息被他人盜用了，怎麽修改？</strong><br>
												A：賬號被他人盜用的話請在個人信息頁面修改節點連接密碼，然後重置訂閱連接。
											</p>
										</li>
									</ol>
									<h6 style="font-weight: 700;display: inline-block;font-size: 20px;margin-top: 10px;margin-bottom: 10px;color: #34395e;">節點問題</h6>
									<ol>
										<li>
											<p><strong>Q：訂閱更新失敗？</strong><br>
												A：無法更新訂閱請嘗試重置訂閱連接然後再次訂閱。如果還是無法更新請先刪除軟件中保存過的所有訂閱地址（包括其他網站的訂閱），然後再添加訂閱。
											</p>
										</li>
										<li>
											<p><strong>Q：按照教程設置了，但是還是沒法用怎麽辦？</strong><br>
												A：訪問<a href="https://time.is" target="_blank">time.is</a>對時;<br>
												請保證您沒有安裝/配置過其他的代理軟件/代理規則/瀏覽器插件等，多個代理軟件/規則可能會導致沖突，導致無法使用。請先確保系統純凈後，再嘗試。
											</p>
										</li>
										<li>
											<p><strong>Q：看完了教程後還是不會用，可以提供一對一技術支持嗎？</strong><br>
												A：本站暫不提供一對一技術支持服務，請諒解。
											</p>
										</li>
										<li>
											<p><strong>Q：節點可以玩遊戲嗎？</strong><br>
												A：可以，節點可加速遊戲使用。由於本站節點沒有對遊戲加速進行優化，不保證加速效果。
											</p>
										</li>
										<li>
											<p><strong>Q：節點倍率是什麽？</strong><br>
												A：節點3倍率即為使用1G流量扣除賬號上3G流量，按照倍率結算，無特殊標註倍率的節點均為1倍。<br>
												有標註倍率的節點均為特殊節點，無限流量套餐的用戶在特殊節點消耗的流量將無法免費重置；<br>
												目前本站所有節點均為1倍率即用一計一絕無虛標。
											</p>
										</li>

									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		{include file='user/footer.tpl'}
	</div>
</div>

{include file='user/scripts.tpl'}

</body>

</html>

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
                	<h6 style="font-weight: 700;display: inline-block;font-size: 20px;margin-top: 10px;margin-bottom: 10px;color: #34395e;">账户问题</h6>
                    <ol>
                    	<li>
                    		<p><strong>Q：套餐叠加购买规则是什么？</strong><br>
                    		A：付费一个订阅后商店界面不可叠加订阅会变成“无法购买”灰色按钮，可叠加订阅变为“订阅（可叠加）”按钮，按需购买即可；<br>
								叠加規則為叠加等級時間與當月流量後續流量重置按照您最後一個購買的訂閲爲準進行重置；<br>
								例：某用戶某月1日購買了A1訂閲，同月5日購買了B1訂閲，則該用戶當月流量為120+200=320GB，有效期為90+30=120天，從5日起幾時30天的00：15時重置流量為B1訂閲的200GB；<br>
                            如需升级订阅（不支持降级订阅）可提交工单会由专属客服给出升级所需补充的差价，充值后即可升级订阅。
                            </p>
                    	</li>
                    	<li>
                    		<p><strong>Q：付款后多久到账？</strong><br>
                    		A：正常情况下付款成功后立刻自动到账。如果在付款期间关闭了商店页面将会导致套餐不会自动生效，付款的金额将会变成余额，请直接再用余额购买套餐，无需再付费。付款后长时间没到账请开工单联系客服处理。
                    		</p>
                    	</li>
                    	<li>
                    		<p><strong>Q：账号连接信息被他人盗用了，怎么修改？</strong><br>
                    		A：账号被他人盗用的话请在个人信息页面修改节点连接密码，然后重置订阅连接。
                    		</p>
                    	</li>
                    	<li>
                    		<p><strong>Q：套餐可以退款吗？</strong><br>
                    		A：由于虚拟产品的特殊性，所有套餐一经售出后都不支持退款，请确认后购买，谢谢您的支持和理解。
                    		</p>
                    	</li>
                    	<li>
                    		<p><strong>Q：账号连接信息被他人盗用了，怎么修改？</strong><br>
                    		A：账号被他人盗用的话请在个人信息页面修改节点连接密码，然后重置订阅连接。
                    		</p>
                    	</li>
                    </ol>
                	<h6 style="font-weight: 700;display: inline-block;font-size: 20px;margin-top: 10px;margin-bottom: 10px;color: #34395e;">节点问题</h6>
                    <ol>
                    	<li>
                    		<p><strong>Q：订阅更新失败？</strong><br>
                    		A：无法更新订阅请尝试重置订阅连接然后再次订阅。如果还是无法更新请先删除软件中保存过的所有订阅地址（包括其他网站的订阅），然后再添加订阅。
                    		</p>
                    	</li>
                    	<li>
                    		<p><strong>Q：按照教程设置了，但是还是没法用怎么办？</strong><br>
                    		A：请保证您没有安装/配置过其他的代理软件/代理规则/浏览器插件等，多个代理软件/规则可能会导致冲突，导致无法使用。请先确保系统纯净后，再尝试。
                    		</p>
                    	</li>
                    	<li>
                    		<p><strong>Q：看完了教程后还是不会用，可以提供一对一技术支持吗？</strong><br>
                    		A：本站暂不提供一对一技术支持服务，请谅解。
                    		</p>
                    	</li>
                    	<li>
                    		<p><strong>Q：节点可以玩游戏吗？</strong><br>
                    		A：可以，节点可加速游戏使用。由于本站节点没有对游戏加速进行优化，不保证加速效果。
                    		</p>
                    	</li>
                    	<li>
                    		<p><strong>Q：节点倍率是什么？</strong><br>
                    		A：节点3倍率即为使用1G流量扣除账号上3G流量，按照倍率结算，无特殊标注倍率的节点均为1倍。<br>
                            有标注倍率的节点均为特殊节点，无限流量套餐的用户在特殊节点消耗的流量将无法免费重置；<br>
								目前本站所有节点均为1倍率即用一计一绝无虚标。
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

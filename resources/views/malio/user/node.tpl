<!DOCTYPE html>
<html lang="en">

<head>
  {include file='user/head.tpl'}

  <title>{$i18n->get('servers')} &mdash; {$config["appName"]}</title>

  <style>
    dl,
    ol,
    ul {
      margin-bottom: 0;
    }

    .text-job {
      font-weight: normal;
    }

    .media-title {
      font-weight: bold;
    }

    .node-status:before {
      content: ' ';
      border-radius: 5px;
      height: 8px;
      width: 8px;
      display: inline-block;
      margin-top: 6px;
      margin-right: 8px;
    }

    .node-is-online:before {
      background-color: #63ed7a;
    }

    .node-is-offline:before {
      background-color: #fc544b;
    }

    .card-body .rounded-circle {
      box-shadow: 0 2px 6px #e6ecf1;
    }
  </style>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      {include file='user/navbar.tpl'}

      {if $malio_config['flag_mode'] == 'node-name'}
      {assign var=flags value=['美国'=>'us','香港'=>'hk','新加'=>'sg','日本'=>'jp','回国'=>'cn','中国'=>'cn','台湾'=>$malio_config['taiwan_flag'],'菲律'=>'ph','俄罗'=>'ru','韩国'=>'kr','德国'=>'de','英国'=>'gb','法国'=>'fr','越南'=>'vn','印度'=>'in','印尼'=>'id','澳门'=>'mo','马来'=>'my','荷兰'=>'nl','罗马'=>'ro','澳大'=>'au','加拿'=>'ca']}
      {/if}

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{$i18n->get('servers')}</h1>
          </div>
<div class="alert alert-primary">
<a class="alert-link" style="font-weight:400">{$i18n->get('node-guide-alert')}</a>
</div>
          {foreach $I18N['node-class-name-map'][$i18n->lang] as $node_class => $node_group_name}
          <div class="section-body">
            <h2 class="section-title">{$node_group_name}</h2>
            <div class="row">
              {foreach $nodes as $node}
              {if $node['class'] == $node_class}
              <div class="col-12 col-sm-12 col-lg-6">
                {if $node['sort'] == 11}
                <div class="card" {if $user->class>0} data-toggle="modal" data-target="#node-modal-{$node['id']}"{/if}>
                  {else}
                  <div class="card" {if $user->class >0}onclick="urlChange('{$node['id']}',0,{if $relay_rule != null}{$relay_rule->id}{else}0{/if})"{/if}>
                    {/if}
                    <div class="card-body">
                      <ul class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">
                        <li class="media">
                          {$region = substr($node['name'],0,6)}
                          <img alt="image" class="mr-3 rounded-circle" width="50" src="/theme/malio/assets/modules/flag-icon-css/flags/1x1/{if $malio_config['flag_mode']=='node-name'}{if $flags[$region] != ''}{$flags[$region]}{else}un{/if}{else}{$node['status']}{/if}.svg">
                          <div class="media-body">
                            <div class="media-title node-status {if $node['online']=='1' or $node['sort'] == 14}node-is-online{else}node-is-offline{/if}">{current(explode(" - ", $node['name']))}</div>
                            <div class=" text-job text-muted">{$node['info']}</div>
                          </div>
                          <div class="media-items">
                            {if $malio_config['enable_online_user'] == true}
                            <div class="media-item">
                              <div class="media-value">{if $node['online_user'] == -1} N/A{else} {$node['online_user']}{/if}</div>
                              <div class="media-label">{$i18n->get('online')}</div>
                            </div>
                            {/if}
                            {if $malio_config['enable_node_traffic_rate'] == true}
                            <div class="media-item">
                              <div class="media-value">x{$node['traffic_rate']}</div>
                              <div class="media-label">{$i18n->get('rate')}</div>
                            </div>
                            {/if}
                            {if $malio_config['enable_node_load'] == true}
                            <div class="media-item">
                              <div class="media-value">{if $node['latest_load'] == -1}N/A{else}{$node['latest_load']}%{/if}</div>
                              <div class="media-label">{$i18n->get('load')}</div>
                            </div>
                            {/if}
                            {if $malio_config['enable_node_speedlimit'] == true}
                            <div class="media-item">
                              <div class="media-value">{if {$node['bandwidth']}==0}无{else}{$node['bandwidth']}{/if}</div>
                              <div class="media-label">{$i18n->get('speedlimit')}</div>
                            </div>
                            {/if}
                          </div>
                        </li>
                      </ul>
                    </div>
                                        {if $config['show_stream_media'] == true}
                                            <div style="border-top: 2px dashed #ECF0F3;
                                        border-bottom-right-radius: 0.42rem;
                                        border-bottom-left-radius: 0.42rem;
                                        margin-top: 20px;
                                        margin-bottom: 10px;"></div>
                                            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" style="">
                                                <table id="node_unlocak" class="datatable-table" style="display: block;">
                                                    <thead class="datatable-head">
                                                    <tr class="datatable-row" align="center"  style="left: 0px;">
                                                        <th data-field="YouTube" class="datatable-cell"><span>YouTube</span></th>
                                                        <th data-field="Netflix" class="datatable-cell"><span>Netflix</span></th>
                                                        <th data-field="DisneyPlus" class="datatable-cell"><span>DisneyPlus</span></th>
                                                        <th data-field="港澳台B站" class="datatable-cell"><span>bilibili</span></th>
                                                        <!-- <th data-field="台湾B站" class="datatable-cell"><span>台湾B站</span></th>-->
                                                        <th data-field="MyTVSuper" class="datatable-cell"><span>MyTVSuper</span></th>
                                                        <!--<th data-field="BBC" class="datatable-cell"><span>BBC</span></th>-->
                                                        <!--<th data-field="Abema" class="datatable-cell"><span>Abema</span></th>-->
                                                    </tr>
                                                    </thead>
                                                    <tbody style="" class="datatable-body">
                                                    <tr data-row="0" align="center"  class="datatable-row" style="left: 0px;">
                                                        <td data-field="YouTube" style="width: 13%;" aria-label="{$node['unlock']['unlock_item']['YouTube']}" class="datatable-cell">
                                                            <span>{$node['unlock']['unlock_item']['YouTube']}</span>
                                                        </td>
                                                        <td data-field="Netflix" style="width: 13%;" aria-label="{$node['unlock']['unlock_item']['Netflix']}" class="datatable-cell">
                                                            <span>{$node['unlock']['unlock_item']['Netflix']}</span>
                                                        </td>
                                                        <td data-field="DisneyPlus" style="width: 13%;" aria-label="{$node['unlock']['unlock_item']['DisneyPlus']}" class="datatable-cell">
                                                            <span>{$node['unlock']['unlock_item']['DisneyPlus']}</span>
                                                        </td>
						<td data-field="BilibiliHKMCTW" style="width: 13%;" aria-label="{$node['unlock']['unlock_item']['BilibiliHKMCTW']}" class="datatable-cell">
{if ({$node['unlock']['unlock_item']['BilibiliHKMCTW']}=='Yes') || ({$node['unlock']['unlock_item']['BilibiliTW']}=='Yes')}                                                          
 <span>Yes</span>{/if}
{if {$node['unlock']['unlock_item']['BilibiliTW']}=='No' && {$node['unlock']['unlock_item']['BilibiliHKMCTW']}=='No'}<span>No</span>{/if}
                                                        </td>
                                                        <!--<td data-field="BilibiliTW" style="width: 13%;" aria-label="{$node['unlock']['unlock_item']['BilibiliTW']}" class="datatable-cell">
                                                            <span>{$node['unlock']['unlock_item']['BilibiliTW']}</span>
                                                        </td>-->
                                                       <td data-field="MyTVSuper" style="width: 13%;" aria-label="{$node['unlock']['unlock_item']['MyTVSuper']}" class="datatable-cell">
                                                            <span>{$node['unlock']['unlock_item']['MyTVSuper']}</span>
                                                        </td>
                                                        <!--<td data-field="BBC" style="width: 13%;" aria-label="{$node['unlock']['unlock_item']['BBC']}" class="datatable-cell">
                                                            <span>{$node['unlock']['unlock_item']['BBC']}</span>
                                                        </td>-->
                                                        <!-- <td><div data-field="Abema" style="width: 13%;" aria-label="{$node['unlock']['unlock_item']['Abema']}" class="datatable-cell">
                                                            <span>{$node['unlock']['unlock_item']['Abema']}</span>
                                                        </td>-->
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        {/if}
                  </div>
                </div>
                {/if}
                {/foreach}
              </div>
            </div>
            {/foreach}


        </section>
      </div>
      {include file='user/footer.tpl'}
    </div>
  </div>

  {foreach $nodes as $node}
  {if $user->class >= $node['class']}
  {if $node['sort'] == 11}
  <div class="modal fade" tabindex="-1" role="dialog" id="node-modal-{$node['id']}">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{current(explode(" - ", $node['name']))}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {$v2server=URL::getV2Url($user, $node['raw_node'], 1)}
          <div class="mb-2">{$i18n->get('address')}: <code>{$v2server['add']}</code></div>
          <div class="mb-2">{$i18n->get('port')}: <code>{$v2server['port']}</code></div>
          <div class="mb-2">AlterId: <code>{$v2server['aid']}</code></div>
          <div class="mb-2">UUID: <code>{$user->getUuid()}</code></div>
          <div class="mb-2">{$i18n->get('transport')}: <code>{if $v2server['net']=="tls"}tcp{else}{$v2server['net']}{/if}</code></div>
          {if $v2server['net']=="ws"}
          <div class="mb-2">{$i18n->get('path')}: <code>{$v2server['path']}</code></div>
          {/if}
          {if $v2server['net']=="kcp"}
          <div class="mb-2">{$i18n->get('camouflage-type')}: <code>{$v2server['type']}</code></div>
          {/if}
          {if ($v2server['net']=="ws" && $v2server['tls']=="tls")||$v2server['net']=="tls"||($v2server['net']=="tcp" && $v2server['tls']=="tls")}
          <div class="mb-2">TLS: <code>TLS</code></div>
          {/if}
          <div class="mb-2">{$i18n->get('vmess-url')}: <code>{URL::getV2Url($user, $node['raw_node'])}</code></div>
        </div>
      </div>
    </div>
  </div>
  {/if}
  {/if}
  {/foreach}

  {include file='user/scripts.tpl'}
  <input id="tmp_input" style="display: none;">

  <div class="modal fade" tabindex="-1" role="dialog" id="nodeinfo">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{$i18n->get('server-info')}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <iframe id="infoifram" seamless style="border: none;width: 100%;height: 600px;"></iframe>
        </div>
      </div>
    </div>
  </div>
</body>
  <script>
        $("td span:contains('Yes')").addClass("text-success");
        $("td span:contains('No')").addClass("text-danger");
        $("td span:contains('Unknow')").addClass("text-warning");
        $("td span:contains('仅限自制')").addClass("text-info");
  </script>
</html>

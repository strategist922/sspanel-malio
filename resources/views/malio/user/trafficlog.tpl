<!DOCTYPE html>
<html lang="en">

<head>
    {include file='user/head.tpl'}

    <title>{$i18n->get('traffic-history')} &mdash; {$config["appName"]}</title>

</head>

<body>
<div id="app">
    <div class="main-wrapper">
        {include file='user/navbar.tpl'}

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>{$i18n->get('traffic-history')}</h1>
                </div>
                <div class="section-body">
                    <h2 class="section-title">{$i18n->get('notice')}</h2>
                    <p class="section-lead">{$i18n->get('traffic-history-notice')}</p>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-md">
                                            <tbody>
                                            <tr>
                                                <th>{$i18n->get('username')}</th>
                                                <th>{$i18n->get('useredtarffic')}</th>
                                                <th>{$i18n->get('traffic-used-node')}</th>
                                                <th>{$i18n->get('date')}</th>

                                            </tr>
                                            {if count($logs) == 0}
                                                <tr>
                                                    <td colspan="6">
                                                        <strong>{$i18n->get('no-config-history-yet')}</strong></td>
                                                </tr>
                                            {else}
                                                {foreach $logs as $log}
                                                    <tr>
                                                        <td>{$name->user_name}</td>
                                                        <td>{(($log->u+$log->d)/1048576)|number_format:2}MB
                                                        <td>{foreach $nodes as $node}
                                                                {if $node->id==$log->node_id}
                                                                    {$node->name}
                                                                {/if}
                                                            {/foreach}
                                                        </td>
                                                        <td>{date("Y-m-d H:i:s",{$log->log_time})}</td>


                                                    </tr>
                                                {/foreach}
                                            {/if}
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="pagination-render float-right">
                                        {$logs->render()}
                                    </div>
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
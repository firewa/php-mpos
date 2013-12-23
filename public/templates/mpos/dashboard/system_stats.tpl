 <article class="module width_quarter" {if !$GLOBAL.config.disable_invitations &&  $smarty.session.AUTHENTICATED|default:"0" == 1 && $GLOBAL.userdata.is_admin == 1}style="display: none"{/if}>
   <header><h3>{$GLOBAL.config.payout_system|capitalize} 统计</h3></header>
   <div class="module_content">
     <table width="100%">
       <tbody>
{if $GLOBAL.config.payout_system == 'pplns'}
         <tr>
           <td><b>PPLNS Target</b></td>
           <td id="b-pplns" class="right">{$GLOBAL.pplns.target}</td>
         </tr>
{elseif $GLOBAL.config.payout_system == 'pps'}
        <tr>
          <td><b>未支付 Shares</b></td>
          <td id="b-ppsunpaid">{$GLOBAL.userdata.pps.unpaidshares}</td>
        </tr>
        <tr>
          <td><b>基准PPS费率</b></td>
          <td>{$GLOBAL.ppsvalue|number_format:"12"} {$GLOBAL.config.currency}</td>
        </tr>
        <tr>
          <td><b>矿池PPS费率</b></td>
          <td>{$GLOBAL.poolppsvalue|number_format:"12"} {$GLOBAL.config.currency}</td>
        </tr>
        <tr>
          <td><b>PPS 难度</b></td>
          <td id="b-ppsdiff">{$GLOBAL.userdata.sharedifficulty|number_format:"2"}</td>
        </tr>
{/if}
         <tr><td colspan="2">&nbsp;</td></tr>
         {include file="dashboard/round_shares.tpl"}
         <tr><td colspan="2">&nbsp;</td></tr>
         {include file="dashboard/payout_estimates.tpl"}
         <tr><td colspan="2">&nbsp;</td></tr>
         {include file="dashboard/network_info.tpl"}
         <tr><td colspan="2">&nbsp;</td></tr>
       </tbody>
      </table>
    </div>
 </article>


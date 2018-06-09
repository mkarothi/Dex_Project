<div id="header_wrapper">
    <div id="header">
      <table> <tr><td>
      <a href="/reports/CMDB/serverinventory"><span class="logo-title"><img src="/images/star.png" alt=""/></a>
      </td><td></td>
      <td>
      <h1> <font color="#CC0033">S</font>erver <font color="#CC0033">T</font>racking <font color="#CC0033">A</font>nd <font color="#CC0033">R</font>eporting <font color="#CC0033">S</font>ystem</h1>
      </td>
      </tr>
      </table>
    </div>
    <?php // debug($this->request->params['action']);?>
    <div id="navcontainer">
      <ul id="navlist">
	  <!--
        <li <?php if(in_array($this->request->params['action'], array("capacitysearch", "storagecalculator") ) ){ ?>class="active" <?php }?> ><a href="/reports/storagecalculator/" <?php if(in_array($this->request->params['action'], array("capacitysearch", "storagecalculator") ) ){ ?>class="current" <?php }?>>Capacity</a></li>
        <li <?php if($this->request->params['action'] == 'sanstorage'){?>class="active" <?php }?> ><a href="/reports/global/sanstorage/" <?php if($this->request->params['action'] == 'sanstorage'){?>class="current" <?php }?>>SAN Storage</a></li>
        <li <?php if($this->request->params['action'] == 'nassearch'){?>class="active" <?php }?> ><a href="/reports/nassearch/" <?php if($this->request->params['action'] == 'nassearch'){?>class="current" <?php }?>>NAS Storage</a></li>
        <li <?php if($this->request->params['action'] == 'storagebilling'){?>class="active" <?php }?> ><a href="/reports/global/storagebilling/" <?php if($this->request->params['action'] == 'storagebilling'){?>class="current" <?php }?>>Storage Billing</a></li>
		-->
        <li <?php if(in_array($this->request->params['action'],array('pingnslookup', 'serverinventory')) ){?>class="active" <?php }?> ><a href="/reports/global/serverinventory" <?php if(in_array($this->request->params['action'],array('pingnslookup', 'serverinventory'))){?>class="current" <?php }?>>Server Inventory</a></li>
        <li <?php if(in_array($this->request->params['action'],array('cmdbinventory')) ){?>class="active" <?php }?> ><a href="/reports/global/cmdbinventory" <?php if(in_array($this->request->params['action'],array('cmdbinventory'))){?>class="current" <?php }?>>CMDB Inventory</a></li>
        <!--
		<li <?php if(in_array($this->request->params['action'],array('drexercise')) ){?>class="active" <?php }?> ><a href="/reports/global/drexercise" <?php if(in_array($this->request->params['action'],array('drexercise'))){?>class="current" <?php }?>>DR Exercise</a></li>
         -->  
	  </ul>
    </div>
</div>
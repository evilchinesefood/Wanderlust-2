<!-- Startnewgame -->
<div id="startnewgame" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i></span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><strong>Start a New Adventure!</strong></h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-5">
            <label>Character's Name:</label>
            <input id="name" name="name" type="text" class="col-xs-12 form-control" placeholder="Adventurer's Name"><br />
            <span style="font-weight: bold;">Choose your talents:</span><br />
            <span style="font-weight: bold;">STR</span> <span style="font-size:12px;">(+Melee Damage)</span><br />
            <span style="font-weight: bold;">INT</span> <span style="font-size:12px;">(+Mana &amp; Damage)</span><br />
            <span style="font-weight: bold;">STA</span> <span style="font-size:12px;">(+Health)</span><br />
            <span style="font-weight: bold;">AGI</span> <span style="font-size:12px;">(+Dodge &amp; Crit)</span><br /><br />
            <span>Talent Points: <span id="points" style="font-weight: bold;">10</span></span><br />

          </div>
          <div class="col-sm-7">
            <div class="row modal-spacing">
              <div class="col-sm-2 col-xs-2 col-table-spacing">
                <span id="STR" title="Strength (Melee Damage)"><strong>STR</strong></span>
                <a onClick="valueup(1)" class="btn btn-primary btn-up"><i class="fa fa-plus"></i></a><br />
                <div class="well">
                  <table class="skill-table" width="20" border="0" cellspacing="0" cellpadding="0">
                    <tr id="1_10"><td>&nbsp;</td></tr>
                    <tr id="1_9"><td>&nbsp;</td></tr>
                    <tr id="1_8"><td>&nbsp;</td></tr>
                    <tr id="1_7"><td>&nbsp;</td></tr>
                    <tr id="1_6"><td>&nbsp;</td></tr>
                    <tr id="1_5"><td>&nbsp;</td></tr>
                    <tr id="1_4"><td>&nbsp;</td></tr>
                    <tr id="1_3"><td>&nbsp;</td></tr>
                    <tr id="1_2"><td>&nbsp;</td></tr>
                    <tr id="1_1"><td>&nbsp;</td></tr>
                  </table>
                </div>
                <a onClick="valuedown(1)" class="btn btn-primary btn-down"><i class="fa fa-minus"></i></a><br />
                <div class="skill-star">
                  <span id="str_value">00</span>
                </div>
              </div>
              <div class="col-sm-2 col-xs-2 col-table-spacing">
                <span id="INT" title="Intelect (Magic Damage)"><strong>INT</strong></span>
                <a onClick="valueup(2)" class="btn btn-primary btn-up"><i class="fa fa-plus"></i></a><br />
                <div class="well">
                  <table class="skill-table" width="20" border="0" cellspacing="0" cellpadding="0">
                    <tr id="2_10"><td>&nbsp;</td></tr>
                    <tr id="2_9"><td>&nbsp;</td></tr>
                    <tr id="2_8"><td>&nbsp;</td></tr>
                    <tr id="2_7"><td>&nbsp;</td></tr>
                    <tr id="2_6"><td>&nbsp;</td></tr>
                    <tr id="2_5"><td>&nbsp;</td></tr>
                    <tr id="2_4"><td>&nbsp;</td></tr>
                    <tr id="2_3"><td>&nbsp;</td></tr>
                    <tr id="2_2"><td>&nbsp;</td></tr>
                    <tr id="2_1"><td>&nbsp;</td></tr>
                  </table>
                </div>
                <a onClick="valuedown(2)" class="btn btn-primary btn-down"><i class="fa fa-minus"></i></a><br />
                <div class="skill-star">
                  <span id="int_value">00</span>
                </div>
              </div>
              <div class="col-sm-2 col-xs-2 col-table-spacing">
                <span id="STA" title="Stamina (Health & Health Regen)"><strong>STA</strong></span>
                <a onClick="valueup(3)" class="btn btn-primary btn-up" ><i class="fa fa-plus"></i></a><br />
                <div class="well">
                  <table class="skill-table" width="20" border="0" cellspacing="0" cellpadding="0">
                    <tr id="3_10"><td>&nbsp;</td></tr>
                    <tr id="3_9"><td>&nbsp;</td></tr>
                    <tr id="3_8"><td>&nbsp;</td></tr>
                    <tr id="3_7"><td>&nbsp;</td></tr>
                    <tr id="3_6"><td>&nbsp;</td></tr>
                    <tr id="3_5"><td>&nbsp;</td></tr>
                    <tr id="3_4"><td>&nbsp;</td></tr>
                    <tr id="3_3"><td>&nbsp;</td></tr>
                    <tr id="3_2"><td>&nbsp;</td></tr>
                    <tr id="3_1"><td>&nbsp;</td></tr>
                  </table>
                </div>
                <a onClick="valuedown(3)" class="btn btn-primary btn-down"><i class="fa fa-minus"></i></a><br />
                <div class="skill-star">
                  <span id="sta_value">00</span>
                </div>
              </div>
              <div class="col-sm-2 col-xs-2 col-table-spacing">
                <span id="AGI" title="Agility (Dodge &amp; Crit Chance)"><strong>AGI</strong></span>
                <a onClick="valueup(4)" class="btn btn-primary btn-up"><i class="fa fa-plus"></i></a><br />
                <div class="well">
                  <table class="skill-table" width="20" border="0" cellspacing="0" cellpadding="0">
                    <tr id="4_10"><td>&nbsp;</td></tr>
                    <tr id="4_9"><td>&nbsp;</td></tr>
                    <tr id="4_8"><td>&nbsp;</td></tr>
                    <tr id="4_7"><td>&nbsp;</td></tr>
                    <tr id="4_6"><td>&nbsp;</td></tr>
                    <tr id="4_5"><td>&nbsp;</td></tr>
                    <tr id="4_4"><td>&nbsp;</td></tr>
                    <tr id="4_3"><td>&nbsp;</td></tr>
                    <tr id="4_2"><td>&nbsp;</td></tr>
                    <tr id="4_1"><td>&nbsp;</td></tr>
                  </table>
                </div>
                <a onClick="valuedown(4)" class="btn btn-primary btn-down"><i class="fa fa-minus"></i></a><br />
                <div class="skill-star">
                  <span id="agi_value">00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button id="submitnewcharacterbtn" onClick="submitcharacter()" class="btn btn-success">Create Character</button>
      </div>
    </div>
  </div>
</div>

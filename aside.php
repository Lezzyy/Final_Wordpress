<aside id="sidebar_date" class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
    <div id="div_date">
      <script type="text/javascript">
      var maintenant=new Date();
      var jour=maintenant.getDate();
      var mois=maintenant.getMonth()+1;
      var an=maintenant.getFullYear();
      document.write("Nous sommes le ",jour,"/",mois,"/",an,".");
      </script>
    </div></br>
  </aside>

  <div id="sidebar_horloge">
    <div id="div_horloge"></div>
  </div>



<aside id="sidebar" class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
  <h3>Les articles les plus consultés ce mois-ci :</h3>
  <ul>
    <li><a href="#">Les bonnes raisons d'acheter le Playstation VR</a></li>
    <li><a href="#">Les meilleurs applications Androïd</a></li>
    <li><a href="#">Apple<a></li>
  </ul>
</aside>


<aside id="sidebar_tab" class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
  <div class="tab">
    <button class="tablinks" onclick="openRs(event,'Facebook')">Facebook</button>
    <button class="tablinks" onclick="openRs(event,'Twitter')">Twitter</button>
    <button class="tablinks" onclick="openRs(event,'Linkedin')">LinkedIn</button>
  </div>

  <div id="Facebook" class="tabcontent">
    <h3>Facebook</h3>
    <p>Mai 2017 : 1,9 milliards d'utilisateurs actifs.</p>
  </div>

  <div id="Twitter" class="tabcontent">
    <h3>Twitter</h3>
    <p>Janvier 2017 : 328 millions d'utilisateurs actifs.</p>
  </div>

  <div id="Linkedin" class="tabcontent">
    <h3>LinkedIn</h3>
    <p>Avril 2017 : 100 millions d'utilisateurs actifs.</p>
  </div>
</aside>

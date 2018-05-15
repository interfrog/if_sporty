lib.legalMenuPid = CONTENT
lib.legalMenuPid {
  table = tx_ifthemeconfiguration_domain_model_themeconfiguration
  select {
    pidInList.data = leveluid : 0
    max = 1
  }
  renderObj = TEXT
  renderObj {
      field = legalmenupid
  }
}

lib.menu.legal = HMENU
lib.menu.legal {
  special = directory
  special.value.cObject < lib.legalMenuPid
  wrap = <nav class="footerMenu">|</nav>
  expAll = 1
  1 = TMENU
  1 {
    expAll = 1
    wrap = <ul>|</ul>
    NO = 1
    NO {
      wrapItemAndSub = <li>|</li>
    }
    ACT = 1
    ACT {
      wrapItemAndSub = <li>|</li>
      ATagParams = class="active"
    }
  }
}
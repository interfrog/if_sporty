lib.socialMenuPid = CONTENT
lib.socialMenuPid {
  table = tx_ifthemeconfiguration_domain_model_themeconfiguration
  select {
    pidInList.data = leveluid : 0
    max = 1
  }
  renderObj = TEXT
  renderObj {
      field = socialmenupid
  }
}

lib.menu.social = HMENU
lib.menu.social {
  special = directory
  special.value.cObject < lib.socialMenuPid
  wrap = <nav>|</nav>
  1 = TMENU
  1 {
    noBlur = 1
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
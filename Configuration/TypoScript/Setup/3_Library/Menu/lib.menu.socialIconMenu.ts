lib.socialIconMenuPid = CONTENT
lib.socialIconMenuPid {
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

lib.menu.socialIconMenu = HMENU
lib.menu.socialIconMenu {
	special = directory
	special.value.cObject < lib.socialIconMenuPid
	1 = TMENU
	1 {
		NO = 1
		NO {
			doNotLinkIt = 1
			stdWrap.cObject = TEXT
			stdWrap.cObject {
				value = <span class="fa {field:iconconfig}"></span>
				insertData = 1
				typolink.parameter.field = uid
			}
		}
	}
}
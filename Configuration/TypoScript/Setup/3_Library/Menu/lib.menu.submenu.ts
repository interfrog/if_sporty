lib.menu.submenu = HMENU
lib.menu.submenu {
	entryLevel = 1
	stdWrap {
		required = 1
		innerWrap = <nav class="subMenu"><ul>|</ul></nav>
		outerWrap = <div class="subMenuWrap">|</div>
		preCObject = COA
		preCObject {
			wrap = <h2 class="strokes alternative">|</h2>
			10 = TEXT
			10.data = levelfield:1,nav_title // levelfield:1,title
			10.typolink.parameter.data = leveluid:1
		}
	}
	1 = TMENU
	1 {
		NO = 1
		NO.wrapItemAndSub = <li>|</li>
		ACT = 1
		ACT.wrapItemAndSub = <li class="active">|</li>
		ACT.ATagParams = class="strokes"
	}
}
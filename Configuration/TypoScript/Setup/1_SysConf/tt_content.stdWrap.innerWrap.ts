lib.regularWrap < tt_content.stdWrap.innerWrap.cObject.default
lib.regularWrap {
	20 {
		40 = CASE
		40 {
			key.field = section_frame
			default = TEXT
			default.value =
			default.noTrimWrap = || |
			1 < .default
			1.value = colorBox
			70 < .default
			70.value = noMargin

		}
		50 = TEXT
		50 {
			value = hideOnMobile
			noTrimWrap = || |
			if.isTrue.field = hidemobile
		}
		60 = TEXT
		60 {
			value = hideOnDesktop
			noTrimWrap = || |
			if.isTrue.field = hidedesktop
		}
	}
	25 >
	25 = RECORDS
	25 {
		tables = tx_ifthemeconfiguration_domain_model_colorsheme
		source.field = colorsheme
		dontCheckPid = 1
		conf.tx_ifthemeconfiguration_domain_model_colorsheme = TEXT
		conf.tx_ifthemeconfiguration_domain_model_colorsheme {
			field = identifier
			stdWrap.noTrimWrap = | data-colorsheme="|"|
		}
	}
}

tt_content.stdWrap.innerWrap.cObject {
	default >
	default = COA
	default {
		if.isInList.field = tx_gridelements_backend_layout
		if.value = sitearea,fullslider
		if.negate = 1
		10 = CASE
		10 {
			key.field = layout
			default < lib.regularWrap
			1 = TEXT
			1.value = |
		}
	}
	66 {
		20 >
		40 >
	}
}

TCEFORM {
	tx_powermail_domain_model_form.css {
		removeItems = layout1, layout2, layout3
	}

	tx_powermail_domain_model_page.css {
		removeItems = layout1, layout2, layout3
		addItems {
			not_in_use = not in use
		}
	}
	
	tx_powermail_domain_model_field.css {
		removeItems = layout1, layout2, layout3
		default = width-100
		addItems {
			width-100 = 100%
			width-75 = 75%
			width-66 = 66%
			width-50 = 50%
			width-33 = 33%
			width-25 = 25%
			width-75-clear = 75% (neue Zeile)
			width-66-clear = 66% (neue Zeile)
			width-50-clear = 50% (neue Zeile)
			width-33-clear = 33% (neue Zeile)
			width-25-clear = 25% (neue Zeile)
		}
	}
}
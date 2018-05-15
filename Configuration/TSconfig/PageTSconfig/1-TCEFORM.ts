TCEFORM {

	tx_ifthemeconfiguration_domain_model_themeconfiguration {
		theme {
			addItems {
				if_sporty = if_sporty
			}
		}
	}
	tx_ifthemeconfiguration_domain_model_colorsheme {
		theme {
			addItems {
				if_sporty = if_sporty
			}
		}
	}

	tt_content {
		layout {
			removeItems = 2,3
			altLabels {
				0 = Default
				1 = ifPage-Sporty: Teaser-Box
			}
		}
		section_frame {
			removeItems = 1,5,6,10,11,12,20,21
			altLabels {
				0 = Bitte wählen Sie Ihr Layout
				66 = Reines Element ohne Standardisierten Rahmen
			}
			addItems {
				30 = Spezial: Button
				50 = Spezial: Bilder Gallery
				60 = Spezial: Bildbox mit Farboverlay (von links)
				61 = Spezial: Bildbox mit Farboverlay (von rechts)
				62 = Spezial: Bildbox mit Farboverlay (von oben)
				63 = Spezial: Bildbox mit Farboverlay (von unten)
				70 = Kein Abstand
			}
		}
		header_layout {
			removeItems = 1,5
			altLabels {
				0 = Kapitelüberschrift h2
				2 = Bereichsüberschrift h3
				3 = Zwischenüberschrift h4
				4 = Teilüberschrift h5 
			}
			addItems {
				6 = Seitenüberschrift h1 (SEO - nur einmal verwenden)
			}
		}
		menu_type {
			addItems {
				#specialmenu = Spezial: Beispielmenü
				20 = SEO-Übersicht
			}
		}
		imagecaption_position {
			addItems {
				block = Blocksatz
			}
		}
	}
}

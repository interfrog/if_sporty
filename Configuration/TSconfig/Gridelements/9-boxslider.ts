tx_gridelements.setup.boxslider {
    title = Teaser-Slider
    description = Erzeugt einen Slider aus Content-Elementen.
    topLevelLayout = 1
    config {
        colCount = 1
        rowCount = 1
        rows {
            1 {
                columns {
                    1 {
                        name = Elemente
                        colPos = 10
                    }
                }
            }
        }
    }
    flexformDS (
    <T3DataStructure>
        <meta type="array">
        <langDisable>1</langDisable>
        </meta>
        <ROOT type="array">
            <el type="array">
                <cols type="array">
                    <TCEforms type="array">
                        <label>Spalten</label>
                        <config type="array">
                            <type>select</type>
                            <default>3</default>
                            <items type="array">
                                <numIndex index="0" type="array">
                                    <numIndex index="0">3</numIndex>
                                    <numIndex index="1">3</numIndex>
                                </numIndex>
                                <numIndex index="1" type="array">
                                    <numIndex index="0">2</numIndex>
                                    <numIndex index="1">2</numIndex>
                                </numIndex>
                            </items>
                        </config>
                    </TCEforms>
                </cols>
            </el>
        </ROOT>
    </T3DataStructure>
    )
}
<?php
$hierarquia = array(
	array(
		"nome_cargo" => "CEO",
		"subordinados" => array(
			// Início: Diretor Comercial
			array(
				"nome_cargo" => "Diretor Comercial",
				"subordinados" => array(
					// Início: Gerente de Vendas
					array(
						"nome_cargo" => "Gerente de Vendas"
					)
					// Fim: Gerente de Vendas
				)
			),
			// Fim: Diretor Comercial
			// Início: Diretor Financeiro
			array(
				"nome_cargo" => "Diretor Financeiro",
				"subordinados" => array(
					// Início: Gerente de Contas a Pagar
					array(
						"nome_cargo" => "Gerente de Contas a Pagar",
						"subordinados" => array(
							// Início: Supervisor de Pagamentos
							array(
								"nome_cargo" => "Supervisor de Pagamentos"
							)
							// Fim: Supervisor de Pagamentos
						)
					),
					// Fim: Gerente de Contas a Pagar
					// Início: Gerente de Compras
					array(
						"nome_cargo" => "Gerente de Compras",
						"subordinados" => array(
							// Início: Supervisor de Suprimentos
							array(
								"nome_cargo" => "Supervisor de Suprimentos",
								"subordinados" => array(
									// Início: Funcionário
									array(
										"nome_cargo" => "Funcionário"
									)
									// Fim: Funcionário
								)
							)
							// Fim: Supervisor de Suprimentos
						)
					)
					// Fim: Gerente de Compras
				)
			)
			// Fim: Diretor Financeiro
		)
	)
);

function exibir($cargos) {
	$html = '<ul>';
	foreach ($cargos as $cargo) {
		$html .= '<li>';
		$html .= $cargo['nome_cargo'];
		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
			$html .= exibir($cargo['subordinados']);
		}
		$html .= '</li>';
	}
	$html .= '</ul>';
	return $html;
}

echo exibir($hierarquia);
?>

# 🎯 Lotofácil Analytics

Sistema em PHP para análise estatística da Lotofácil com:
- Leitura do CSV oficial
- Frequência histórica
- Seleção de 20 números base
- Desdobramento em jogos de 15 números

## 🔬 Recursos Avançados
- Score por número (histórico + recente + atraso)
- Simulação retroativa (backtest)
- Desdobramento inteligente
- Exportação CSV / TXT
- Formato compatível com apps de loteria

## 📊 Métricas
O sistema mede quantas vezes teria feito:
- 11, 12, 13, 14 e 15 pontos

## 📂 Estrutura
- `data/` → CSV oficial
- `src/` → regras e estatísticas
- `scripts/` → execução

## ▶️ Como usar
```bash
composer dump-autoload
php scripts/analisar.php

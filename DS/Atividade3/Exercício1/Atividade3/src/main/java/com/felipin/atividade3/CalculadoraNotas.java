/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.felipin.atividade3;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class CalculadoraNotas extends JFrame implements ActionListener {
    private JTextField nota1, nota2, nota3, nota4;
    private JButton calcular;
    private JLabel resultado;

    public CalculadoraNotas() {
        super("Calculadora de Média");

        // Configurações básicas da janela
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(400, 200);
        setLocationRelativeTo(null);

        // Criação dos componentes da interface gráfica
        nota1 = new JTextField(5);
        nota2 = new JTextField(5);
        nota3 = new JTextField(5);
        nota4 = new JTextField(5);
        calcular = new JButton("Calcular Média");
        resultado = new JLabel("");

        // Adiciona os componentes na janela
        JPanel painel = new JPanel(new GridLayout(5, 2));
        painel.add(new JLabel("Nota 1:"));
        painel.add(nota1);
        painel.add(new JLabel("Nota 2:"));
        painel.add(nota2);
        painel.add(new JLabel("Nota 3:"));
        painel.add(nota3);
        painel.add(new JLabel("Nota 4:"));
        painel.add(nota4);
        painel.add(new JLabel(""));
        painel.add(calcular);

        getContentPane().add(painel, BorderLayout.CENTER);
        getContentPane().add(resultado, BorderLayout.SOUTH);

        // Registra o botão "calcular" para ouvir eventos de clique
        calcular.addActionListener(this);

        setVisible(true);
    }

    public void actionPerformed(ActionEvent evento) {
        // Lê as notas fornecidas pelo usuário
        double n1 = Double.parseDouble(nota1.getText());
        double n2 = Double.parseDouble(nota2.getText());
        double n3 = Double.parseDouble(nota3.getText());
        double n4 = Double.parseDouble(nota4.getText());

        // Calcula a média
        double media = (n1 + n2 + n3 + n4) / 4;

        // Exibe a média no JLabel
        resultado.setText("A média das notas é " + media);
    }

    public static void main(String[] args) {
        new CalculadoraNotas();
    }
}

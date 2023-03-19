package com.example.felipin

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.material.MaterialTheme
import androidx.compose.material.Surface
import androidx.compose.material.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Modifier
import androidx.compose.ui.tooling.preview.Preview
import com.example.felipin.ui.theme.SecondAplicationETECTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            SecondAplicationETECTheme {
                // A surface container using the 'background' color from the theme
                Surface(
                    modifier = Modifier.fillMaxSize(),
                    color = MaterialTheme.colors.background
                ) {
                    NomeDoUsuario(PrimeiroNome = "Felipe", SegundoNome = "João")
                }
            }
        }
    }
}

@Composable
fun NomeDoUsuario(PrimeiroNome: String, SegundoNome: String) {
    Column(){
        Text(text = "Bem vindo, $PrimeiroNome,");
        Text(text = "E boa sorte, $SegundoNome")
    }
}

@Preview(showBackground = true)
@Composable
fun DefaultPreview() {
    SecondAplicationETECTheme {
        NomeDoUsuario("Felipe", "Joao!")
    }
}
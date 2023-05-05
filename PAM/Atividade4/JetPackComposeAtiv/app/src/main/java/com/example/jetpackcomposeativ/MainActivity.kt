package com.example.jetpackcomposeativ

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.background
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.material3.BottomAppBar
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Scaffold
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.material3.TopAppBar
import androidx.compose.runtime.Composable
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.tooling.preview.Preview
import com.example.jetpackcomposeativ.ui.theme.JetPackComposeAtivTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            MainScreenContent()
        }
    }
}

@Composable
fun MainScreenContent() {
   Scaffold(
       topBar = {
           TopAppBar(
               content = { Text(text = "Carlinhos é lenda")}
           )
        },
       content = {
            paddingValues -> Log.i("paddingValues", "$paddingValues")
            Column(
                modifier = Modifier.background(Color.Yellow)
            ) {
                Text("Task1")
                Text("Task2")
                Text("Task3")
                Text("Task4")
            }
        },
        bottomBar = {
            BottomAppBar(
                content = { Text(text = "Matagal é lindo")}
            ) {

            }
        }
    )
}

@Preview(showBackground = true)
@Composable
fun DefaultPreview() {
    MainScreenContent()
}
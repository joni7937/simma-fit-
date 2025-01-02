@NonCPS
def buildDockerImage() {
    docker.build("simma-fit", ".")
}

pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/joni7937/simma-fit-.git'
            }
        }
        stage('Build Docker Image') {
            steps {
                script {
                    buildDockerImage()
                }
            }
        }
        stage('Deploy') {
            steps {
                script {
                    sh 'docker run -d -p 80:80 simma-fit'
                }
            }
        }
    }
}

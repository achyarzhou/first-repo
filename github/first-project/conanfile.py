from conan import ConanFile

class MyPackge(ConanFile):
    settings = "os", "compiler", "build_type", "arch"
    requires = "fmt/9.1.0"
    generators = "cmake"


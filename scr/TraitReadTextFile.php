<?php declare(strict_types=1);

/**
 * @copyright 2021© Steve Lewis, The Module Factory Ltd.
 *
 * @author Steve R. Lewis, <steve@themodulefactory.com>
 *
 * A small package built for a private project to manage text read from a file from which a text object is created.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
 * TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 * You should have received a copy of the MIT License along with this program, alternatively you can get a copy here;
 * @license https://github.com/TheModuleFactory/file-system-tree/blob/main/LICENSE
 *
 * For more information regarding Open Source Licensing you can visit;
 *
 *     <https://www.mit.edu/~amini/LICENSE.md>
 *     <https://opensource.org/licenses/MIT>
 *
 * The Module Factory Ltd. Company Number; 09989173, <https://www.themodulefactory.com>
 */

namespace ManageTextString;

/**
 * Trait TraitReadTextFile
 * @package ManageTextString
 */
trait TraitReadTextFile {
    /**
     * @param string $srcFile
     * @return string|null
     */
    public function readFileToString (string $srcFile): ?string
    {
        return file_get_contents($srcFile);
    }

    /**
     * @param string $srcFile
     * @return array|null
     */
    public function readFileToArray (string $srcFile): ?array
    {
        return explode(PHP_EOL, file_get_contents($srcFile));
    }

    /**
     * @param string $writePath
     * @param string $textOutput
     * @param string $fileOpenMode
     */
    public function writeStringToFile (string $writePath = "", string $textOutput = "", string $fileOpenMode = "a"): void {
        if (!empty($writePath) && !empty($textOutput)) {
            $textOutputToFile = fopen($writePath, $fileOpenMode) or die("Unable to open file!");

            fwrite($textOutputToFile, $textOutput);

            fclose($textOutputToFile);
        }
    }

    /**
     * @param string $writePath
     * @param string $arrayOutput
     * @param string $fileOpenMode
     */
    public function writeArrayToFile (string $writePath = "", string $arrayOutput = "", string $fileOpenMode = "a"): void {
        if (!empty($writePath) && !is_null($arrayOutput)) {
            $textOutputToFile = fopen($writePath, $fileOpenMode) or die("Unable to open file!");

            foreach($arrayOutput as $key=>$arrayItem) {
                fwrite($textOutputToFile, $arrayItem);
            }

            fclose($textOutputToFile);
        }
    }
}